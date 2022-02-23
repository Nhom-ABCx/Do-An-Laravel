<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\BinhLuan;
use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CT_HoaDon;
use App\Models\CTChuongTrinhKM;
use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\HangSanXuat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Imports\SanPhamImport;
use Maatwebsite\Excel\Facades\Excel;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = SanPham::all();
        if (!empty($request->input('TenSanPham')))
            $data = $data->where('TenSanPham', 'LIKE', '%' . Str::of($request->input('TenSanPham'))->trim() . '%');
        if (!empty($request->input('HangSanXuatId')))
            $data = $data->where('HangSanXuatId', $request->input('HangSanXuatId'));
        if (!empty($request->input('LoaiSanPhamId')))
            $data = $data->where('LoaiSanPhamId', $request->input('LoaiSanPhamId'));

        foreach ($data as $sp)
            $this->fixImage($sp);
        //gọi fixImage cho từng sp
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.SanPham.SanPham-index', ["sanPham" => $data, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //phan nay da sua lai thanh modal
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //truyền thêm danh sách loại sản phẩm để tạo thẻ <options>
        return view('Admin.SanPham.SanPham-create', ['lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'FileExcel' => ['mimes:xlsx,xls,csv,ods'], //validate loại excel
            ]
        );
        if ($request->hasFile('FileExcel')) {
            $import = new SanPhamImport;
            Excel::import($import, $request->file('FileExcel'));
            return Redirect::back()->with("SanPhamMoi", 'Thêm thành công ' . $import->getRowCount() . ' sản phẩm');
        }
        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate(
            [
                'TenSanPham' => ['required', 'unique:san_phams,TenSanPham', 'max:255'],
                'MoTa' => ['max:255'],
                'HinhAnh' => ['required', 'image', "max:102400"], //max:100 Mb
                'HangSanXuatId' => ['required', 'numeric', 'integer', 'exists:loai_san_phams,id'],
                'LoaiSanPhamId' => ['required', 'numeric', 'integer', 'exists:hang_san_xuats,id'],
            ]
        );

        $sanPham = SanPham::create([
            'TenSanPham' => $request->input('TenSanPham'),
            'MoTa' => $request->input('MoTa') ?? '',
            'SoLuongTon' => 0,
            'HinhAnh' => '', //cap nhat sau
            'LuotMua' => 0,
            'HangSanXuatId' => $request->input('HangSanXuatId'),
            'LoaiSanPhamId' => $request->input('LoaiSanPhamId'),
        ]);

        if ($request->hasFile('HinhAnh')) {
            $sanPham->HinhAnh = $request->file('HinhAnh')->store('assets/images/product-image/' . $sanPham->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $sanPham->HinhAnh);
            $sanPham->HinhAnh = $catChuoi[4];
        }

        $sanPham->save(); //luu lại đường dẫn hình

        return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show($sanPham)
    {
        $sanPham = SanPham::withTrashed()->find($sanPham);
        $this->fixImage($sanPham);
        return view("Admin.SanPham.SanPham-show-modal", ["sanPham" => $sanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        $this->fixImage($sanPham);
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //truyền them danh sách loại sản phẩm để tạo thẻ <options
        return view('Admin.SanPham.SanPham-edit', ['sanPham' => $sanPham, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
        //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
        if ($request->hasFile('HinhAnh')) {
            $sanPham->HinhAnh = $request->file('HinhAnh')->store('assets/images/product-image/' . $sanPham->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $sanPham->HinhAnh);
            $sanPham->HinhAnh = $catChuoi[4];
        }
        $sanPham->fill([
            'TenSanPham' => $request->input('TenSanPham'),
            'MoTa' => $request->input('MoTa') ?? '',
            'SoLuongTon' => $request->input('SoLuongTon'),
            'GiaNhap' => $request->input('GiaNhap'),
            'GiaBan' => $request->input('GiaBan') ?? 0,
            'HangSanXuatId' => $request->input('HangSanXuatId'),
            'LoaiSanPhamId' => $request->input('LoaiSanPhamId'),
        ]);
        //fill chi sua doi tuong trong bo nho', muon luu trong CSDL thi phai save()
        $sanPham->save();
        //dd($sanPham);
        return Redirect::route('SanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //dd($sanPham);
        $sanPham->delete();
        return Redirect::route('SanPham.index');
    }
    public function SanPhamDaXoa(Request $request)
    {
        $data = SanPham::onlyTrashed()->get();
        if (!empty($request->input('TenSanPham')))
            $data = $data->where('TenSanPham', 'LIKE', '%' . Str::of($request->input('TenSanPham'))->trim() . '%');
        if (!empty($request->input('HangSanXuatId')))
            $data = $data->where('HangSanXuatId', $request->input('HangSanXuatId'));
        if (!empty($request->input('LoaiSanPhamId')))
            $data = $data->where('LoaiSanPhamId', $request->input('LoaiSanPhamId'));

        foreach ($data as $sp)
            $this->fixImage($sp);
        //gọi fixImage cho từng sp
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.SanPham.SanPham-index', ["sanPham" => $data, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat, 'request' => $request]);
    }
    public function KhoiPhucSanPham($id)
    {
        $sanPham = SanPham::onlyTrashed()->find($id);
        $sanPham->restore();
        return Redirect::route('SanPham.DaXoa');
    }
    public function XoaVinhVienSanPham($id)
    {
        $sanPham = SanPham::onlyTrashed()->find($id);
        $sanPham->forceDelete();
        return Redirect::route('SanPham.DaXoa');
    }
    //phương thức hỗ trợ load hình ảnh và thay thế bằng hình mạc định nếu ko tìm thấy file
    public static function fixImage(SanPham $sanPham)
    {
        //chạy lệnh sau: php artisan storage:link     de tu tao 1 lien ket den' folder public
        // nếu trong đường dẫn "storage/app/public" + "assets/images/product-image/..." tồn tại hình ảnh

        if (Storage::disk('public')->exists("assets/images/product-image/" . $sanPham->id . "/" . $sanPham->HinhAnh)) {
            $sanPham->HinhAnh = Storage::url("assets/images/product-image/" . $sanPham->id . "/" . $sanPham->HinhAnh);
        } elseif (Storage::disk('public')->exists("assets/images/product-image/" . $sanPham->HinhAnh))
            $sanPham->HinhAnh = Storage::url("assets/images/product-image/" . $sanPham->HinhAnh);
        else
            $sanPham->HinhAnh = Storage::url("assets/images/404/Img_error.png");
    }
    //lay so  sao cua san pham
    public function SoSao()
    {
        $data = SanPham::all();
        $this::Them_Star_Vao_ListSanPham($data);
        foreach ($data as $value) {
            $this->fixImage($value);
        }
        // dd($data);
        return view('Admin.SanPham.SanPham-sao', ['sanPhamSao' => $data]);
    }
    //ham ho tro API
    public static function Them_Star_Vao_ListSanPham($ListSanPham)
    {
        //tung phan tu cua ListsanPham, tinh trung binh so' Sao dua theo chi tiet hoa' don
        //API tra ve` trung binh` so' Sao
        foreach ($ListSanPham as $item) {
            //lay ra danh sach' san pham duoc mua
            $dsCtHoaDon = CT_HoaDon::where("SanPhamId", $item->id)->get();
            //$dsCtHoaDon = $item->CT_HoaDon;   //ko biet tai sao no' co' chi tiet hoa' don vao json
            //dd($dsCtHoaDon);
            $Star = $dsCtHoaDon->avg('Star'); //lay ra so' sao trung binh`
            if (!empty($Star))
                Arr::add($item, "Star", $Star);
            else
                Arr::add($item, "Star", 0);
        }
    }
    //them giam gia' vao` api
    public static function Them_GiamGia_Vao_ListsanPham($ListSanPham)
    {
        //lay ra cac chi tiet khuyen mai dang giam gia'
        $dsCtChuongTrinhKM = ChuongTrinhKhuyenMaiController::danhSachChiTietChuongTrinhKM();
        //lay ra tat ca id san pham dang giam gia' luu vao trong mang?
        $idSanPhamGiamGia = [];
        $i = 0;
        foreach ($dsCtChuongTrinhKM as $ctkm) {
            $data = Arr::add($idSanPhamGiamGia, "$i", $ctkm->SanPhamId);
            $idSanPhamGiamGia = $data;
            $i++;
        }
        //tung phan tu cua danh sach San Pham
        foreach ($ListSanPham as $item) {
            //neu' id san pham do' ko thuoc san pham dang giam gia' thi GiamGia=0
            if (!in_array($item->id, $idSanPhamGiamGia))
                Arr::add($item, "GiamGia", 0);
            //nguoc lai tim` xem san pham giam? gia' do' no' Gia'Giam? bao nhieu
            else {
                foreach ($dsCtChuongTrinhKM as $ctkm) {
                    if ($item->id == $ctkm->SanPhamId)
                        Arr::add($item, "GiamGia", $ctkm->GiamGia);
                }
            }
        }
    }
    //API
    public function API_SanPham(Request $request)
    {
        //lay het san pham
        $dsSanPham = SanPham::where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->get(); //sap xep theo luot mua giam dan`



        //dd($dsSanPham);

        YeuThichController::Them_isFavorite_Vao_ListSanPham($dsSanPham, $request);
        SanPhamController::Them_Star_Vao_ListSanPham($dsSanPham);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($dsSanPham);

        return response()->json($dsSanPham, 200);
    }

    public function API_SanPham_LoaiSanPham(LoaiSanPham $loaiSanPham, Request $request)
    {
        $data = SanPham::where('LoaiSanPhamId', $loaiSanPham->id)->where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->get(); //sap xep theo luot mua giam dan`

        YeuThichController::Them_isFavorite_Vao_ListSanPham($data, $request);
        $this->Them_Star_Vao_ListSanPham($data);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($data);


        //kt neu du lieu ko rong~ thi tra ve`
        if (!empty($data))
            return response()->json($data, 200);
        //nguoc lai tra ve mang? rong~
        return response()->json([], 404);
    }
    #chi tiết sản phẩm
    public function API_SanPham_DT_ChiTiet($id)
    {
        $data = SanPham::find($id);
        if ($data == null) {
            return response()->json($data, 404);
        }
        return response()->json($data, 200);
    }
    # tìm kiếm sản phẩm
    public function API_SanPham_TimKiem(Request $request)
    {
        $data = SanPham::where('TenSanPham', 'LIKE', '%' . Str::of($request['TenSanPham'])->trim() . '%')->where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->get(); //sap xep theo luot mua giam dan`

        YeuThichController::Them_isFavorite_Vao_ListSanPham($data, $request);
        $this->Them_Star_Vao_ListSanPham($data);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($data);
        # không có dữ liệu trả về
        if ($data == null) {
            return response()->json($data, 404);
        }

        #có dữ liệu
        return response()->json($data, 200);
    }


    #top sản phẩm bán chạy
    public function API_SanPham_Top(Request $request)
    {
        $data = SanPham::where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->limit(8)->get(); //sap xep theo luot mua giam dan`

        YeuThichController::Them_isFavorite_Vao_ListSanPham($data, $request);
        $this->Them_Star_Vao_ListSanPham($data);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($data);
        return response()->json($data, 200);
    }

    # sản phẩm đang giảm giá
    public function API_SanPham_GiamGia(Request $request)
    {
        $ctkm = ChuongTrinhKhuyenMai::where('deleted_at', null)->get();
        $chiTietCtkm = CTChuongTrinhKM::where('ChuongTrinhKhuyenMaiId', $ctkm[0]->id)->get();
        $dsSanPham = [];
        $i = 0;
        foreach ($chiTietCtkm as $item) {
            $sp = SanPham::where('id', $item->SanPhamId)->where('SoLuongTon', '>', 0) //so luonhg ton >0
                ->first(); //sap xep theo luot mua giam dan`
            if (!empty($sp)) {
                $dsSanPham = Arr::add($dsSanPham, "$i", $sp);
                $i++;
            }
        }
        //dd($dsSanPham);
        YeuThichController::Them_isFavorite_Vao_ListSanPham($dsSanPham, $request);
        $this->Them_Star_Vao_ListSanPham($dsSanPham);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($dsSanPham);
        return response()->json($dsSanPham, 200);
    }

    public function API_SanPham_GiaBan(Request $request)
    {
        //$data = SanPham::whereBetween('GiaBan', [$request["from"], $request["to"]])->where('LoaiSanPhamId',$request["id"])->get();
        $data = SanPham::where('LoaiSanPhamId', $request["id"])->where('SoLuongTon', '>', 0) //so luonhg ton >0
            ->orderByDesc('LuotMua')->get(); //sap xep theo luot mua giam dan`

        $PriceFrom = $request["PriceFrom"];
        $PriceTo = $request["PriceTo"];

        if ((empty($PriceFrom) || $PriceFrom == 0) && !empty($PriceTo)) //null vs notnull
            $data = $data->where("GiaBan", ">=", 0)->where("GiaBan", "<=", $PriceTo);
        else if (!empty($PriceFrom && (empty($PriceTo)) || $PriceTo == 0)) //notnull vs null
            $data = $data->where("GiaBan", ">=", $PriceFrom);
        else if (!empty($PriceFrom) && !empty($PriceTo)) //notnull vs notnull
            $data = $data->where("GiaBan", ">=", $PriceFrom)->where("GiaBan", "<=", $PriceTo);

        $dsSanPham = [];
        $i = 0;
        foreach ($data as $item) {
            $ds = Arr::add($dsSanPham, $i, $item);
            $dsSanPham = $ds;
            $i++;
        }

        YeuThichController::Them_isFavorite_Vao_ListSanPham($dsSanPham, $request);
        $this->Them_Star_Vao_ListSanPham($dsSanPham);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($dsSanPham);
        return response()->json($dsSanPham, 200);
    }

    // api san pham moi
    public function API_SanPham_Moi(Request $request)
    {
        $dsSanPham = SanPham::orderBy('created_at', 'desc')->limit(8)->get();
        // dd($dsSanPham);
        YeuThichController::Them_isFavorite_Vao_ListSanPham($dsSanPham, $request);
        $this->Them_Star_Vao_ListSanPham($dsSanPham);
        SanPhamController::Them_GiamGia_Vao_ListsanPham($dsSanPham);
        if (!empty($dsSanPham))
            return response()->json($dsSanPham, 200);
        return response()->json($dsSanPham, 400);
    }
}
