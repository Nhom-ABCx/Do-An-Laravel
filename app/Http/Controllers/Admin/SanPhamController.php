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
use App\Models\HinhAnh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Imports\SanPhamImport;
use App\Models\CT_SanPham;
use Maatwebsite\Excel\Facades\Excel;
use phpDocumentor\Reflection\Types\Null_;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = SanPham::from(app(SanPham::class)->getTable());

        $this->filter($data, $request);

        foreach ($data as $sp)
            $this->fixImage($sp);
        //gọi fixImage cho từng sp
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('Admin.SanPham.SanPham-index', ["sanPham" => $data, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat, 'request' => $request]);
    }
    /**
     * ham` nay` co tac dung filter theo request
     *  chu? yeu' xai` lai ho index va` daxoa
     */
    public static function filter(&$data, Request $request)
    {
        if (!empty($request['TenSanPham']))
            $data = $data->where('TenSanPham', 'LIKE', '%' . $request['TenSanPham'] . '%');
        if (!empty($request['HangSanXuatId']))
            $data = $data->where('HangSanXuatId', $request['HangSanXuatId']);
        if (!empty($request['LoaiSanPhamId']))
            $data = $data->where('LoaiSanPhamId', $request['LoaiSanPhamId']);
        if (!empty($request['TrangThai']))
            $data = $data->where('TrangThai', $request['TrangThai']);

        $data = $data->get();
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
        return view('Admin.SanPham.SanPham-edit', ['lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'FileExcel' => ['mimes:xlsx,xls,csv,ods'], //validate loại excel
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        if ($request->hasFile('FileExcel')) {
            Excel::import(new SanPhamImport, $request->file('FileExcel'));

            //return Redirect::back()->with("SanPhamMoi", 'Thêm thành công ' . $import->getRowCount() . ' sản phẩm');
            return route('SanPham.index');
        }

        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        $validate = Validator::make($request->all(), [
            'TenSanPham' => ['required', 'unique:san_phams,TenSanPham', 'max:255'],
            'MoTa' => ['max:255'],
            //'HinhAnh' => ['required', 'image', "max:102400"], //max:100 Mb
            'HangSanXuatId' => ['required', 'numeric', 'integer', 'exists:hang_san_xuats,id'],
            'LoaiSanPhamId' => ['required', 'numeric', 'integer', 'exists:loai_san_phams,id'],
            'ThuocTinhChung' => ['array'],
            'ThuocTinh' => ['array'],
            'MoTa' => [],
            'ThuocTinhToHop' => ['array'],
            'Datatable' => ['json'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        //gop key va` value lai thanh` 1 mang? de luu vo dang json
        if (!empty($request['ThuocTinhChung']))
            $thuocTinhChung =  collect($request['ThuocTinhChung'][0])->combine($request['ThuocTinhChung'][1]);

        $sanPham = SanPham::create([
            'TenSanPham' => trim($request['TenSanPham']),
            'MoTa' => $request['MoTa'] ?? '',
            'TrangThai' => $request['TrangThai'] ?? false,
            'ThuocTinh' => $thuocTinhChung ?? json_decode("{}"),
            'HangSanXuatId' => $request['HangSanXuatId'],
            'LoaiSanPhamId' => $request['LoaiSanPhamId'],
            'ThuocTinhToHop' => $request['ThuocTinh'],
        ]);

        //lay het' bang? ra, so sanh' luu vai` DB
        foreach (json_decode($request['Datatable'], true) as $item) {
            //neu' trong DB da~ ton` tai SP do' thi` cap nhat lai gia' ban', ngc lai tao moi'
            $ctSanPham = CT_SanPham::where("SanPhamId", $sanPham->id)->whereRaw('JSON_CONTAINS(ThuocTinhValue, ?)', [$item['BienThe']])->first();
            if (!empty($ctSanPham)) {
                $ctSanPham->update([
                    'GiaBan' => $item['GiaBan'],
                    'TrangThai' => $item['TrangThai'],
                ]);
            } else {
                //xài DB::insert mà ko xài CT_SanPham::create([])  tai vi no' loi~ chu~ khi them vao
                DB::insert(
                    'insert into ct_san_phams(SanPhamId,SoLuongTon,GiaNhap,GiaBan,ThuocTinhValue,TrangThai) values (?, ?, ?, ?, ?, ?)',
                    [$sanPham->id, 0, 0, $item['GiaBan'], $item['BienThe'], $item['TrangThai']]
                );
            }
        }
        //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
        //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
        if ($request->hasFile('HinhAnh')) {

            foreach ($request->file('HinhAnh') as $hinhAnh) {
                $luuHinh = $hinhAnh->store('assets/images/product-image/' . $sanPham->id, 'public');

                //cat chuoi ra, chi luu cai ten thoi
                $catChuoi = explode("/", $luuHinh);
                $luuHinh = $catChuoi[4];

                HinhAnh::create([
                    "SanPhamId" => $sanPham->id,
                    "HinhAnh" => $luuHinh,
                ]);
            }
        }

        $sanPham->save(); //luu lại đường dẫn hình

        //return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');
        return route('SanPham.index');
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
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'TenSanPham' => ['required', 'max:255'],
            //'HinhAnh' => ['required', 'image', "max:102400"], //max:100 Mb
            'HangSanXuatId' => ['required', 'numeric', 'integer', 'exists:hang_san_xuats,id'],
            'LoaiSanPhamId' => ['required', 'numeric', 'integer', 'exists:loai_san_phams,id'],
            'ThuocTinhChung' => ['array'],
            'ThuocTinh' => ['array'],
            'MoTa' => [],
            'ThuocTinhToHop' => ['array'],
            'Datatable' => ['json'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);


        //dd(json_decode($request["Datatable"], true));
        //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
        //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
        if ($request->hasFile('HinhAnh')) {

            foreach ($request->file('HinhAnh') as $hinhAnh) {
                $luuHinh = $hinhAnh->store('assets/images/product-image/' . $sanPham->id, 'public');

                //cat chuoi ra, chi luu cai ten thoi
                $catChuoi = explode("/", $luuHinh);
                $luuHinh = $catChuoi[4];

                HinhAnh::create([
                    "SanPhamId" => $sanPham->id,
                    "HinhAnh" => $luuHinh,
                ]);
            }
        }

        //gop key va` value lai thanh` 1 mang? de luu vo dang json
        if (!empty($request['ThuocTinhChung']))
            $thuocTinhChung =  collect($request['ThuocTinhChung'][0])->combine($request['ThuocTinhChung'][1]);


        $sanPham->update([
            'TenSanPham' => trim($request['TenSanPham']),
            'MoTa' => $request['MoTa'] ?? '',
            'TrangThai' => $request['TrangThai'] ?? false,
            'ThuocTinh' => $thuocTinhChung ?? [],
            'HangSanXuatId' => $request['HangSanXuatId'],
            'LoaiSanPhamId' => $request['LoaiSanPhamId'],
            'ThuocTinhToHop' => $request['ThuocTinh'],
        ]);

        //lay het' bang? ra, so sanh' luu vai` DB
        foreach (json_decode($request['Datatable'], true) as $item) {
            //neu' trong DB da~ ton` tai SP do' thi` cap nhat lai gia' ban', ngc lai tao moi'
            $ctSanPham = CT_SanPham::where("SanPhamId", $sanPham->id)->whereRaw('JSON_CONTAINS(ThuocTinhValue, ?)', [$item['BienThe']])->first();
            if (!empty($ctSanPham)) {
                $ctSanPham->update([
                    'MaSanPham' => DB::selectOne("select func_Tao_MaSanPham_CTSanPham_deUpdate(?,?) as Name", [$sanPham->id, $ctSanPham->id])->Name,
                    'SoLuongTon' => $item['SoLuongTon'],
                    'GiaBan' => $item['GiaBan'],
                    'TrangThai' => $item['TrangThai'],
                ]);
            } else {
                //xài DB::insert mà ko xài CT_SanPham::create([])  tai vi no' loi~ chu~ khi them vao
                DB::insert(
                    'insert into ct_san_phams(SanPhamId,SoLuongTon,GiaNhap,GiaBan,ThuocTinhValue,TrangThai) values (?, ?, ?, ?, ?, ?)',
                    [$sanPham->id, 0, 0, $item['GiaBan'], $item['BienThe'], $item['TrangThai']]
                );
            }
        }

        //return response()->json([], 200);
        return route('SanPham.index');
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
    public function DaXoa(Request $request)
    {
        $data = SanPham::onlyTrashed();

        $this->filter($data, $request);

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
        foreach ($sanPham->HinhAnh as $item) {
            if (Storage::disk('public')->exists("assets/images/product-image/" . $sanPham->id . "/" . $item->HinhAnh)) {
                $item->HinhAnh = Storage::url("assets/images/product-image/" . $sanPham->id . "/" . $item->HinhAnh);
            } else {
                $item->HinhAnh = Storage::url("assets/images/404/Img_error.png");
            }
        }
    }
    /**
     * xài để trả về tổ hợp sản phẩm (sử dụng trong edit san pham)
     */
    public function SanPhamCrossJoin(Request $request, SanPham $sanPham = null)
    {
        //https://stackoverflow.com/questions/63631114/how-can-i-cross-join-dynamically-in-laravel

        //dd($request->all());
        //ep' kieu? mang? request thanh` dang collect va` reset lai key
        $requestArray = collect($request->all())->values();


        foreach ($requestArray as $item) {
            //ghi de` lai` mang? thu'[0] thanh` 1 mang? du lieu moi'
            //ep' kieu? mang? $item thanh` collect, sau do' chi lay' phan` tu? co' ten 'value'
            $data[] = collect($item)->pluck("value");
            //$thuocTinhToHop[] = collect($item)->pluck("key")->unique()->first();
        }
        //dd($thuocTinhToHop);

        //$data = [["128 GB", "256 GB", "512 GB", "1024 GB"], ["Vàng đồng", "Xám", "Bạc", "Xanh dương"]];
        //The kind of explodes all elements in the array and sets them as paramenters.(...$options)
        $array = [];
        if (!empty($data))
            foreach (Arr::crossJoin(...$data) as $items) {
                $thuocTinhValue = json_encode($items, JSON_UNESCAPED_UNICODE);

                //neu' trong CTSanPham no' co' to? hop thuoc tinh' do' thi` lay' ra gia' tien`
                if (!empty($sanPham))
                    $ctSanPham = CT_SanPham::where("SanPhamId", $sanPham->id)->whereRaw('JSON_CONTAINS(ThuocTinhValue, ?)', [$thuocTinhValue])->first();
                $giaBan = $ctSanPham->GiaBan ?? 0;
                $soLuongTon = $ctSanPham->SoLuongTon ?? 0;

                $array[] = [
                    "BienThe" => $thuocTinhValue,
                    "GiaBan" => $giaBan,
                    "TrangThai" => $ctSanPham->TrangThai ?? 0,
                    "SoLuongTon" => $soLuongTon,
                ];
            }

        return response()->json($array, 200);
    }
    public function CapNhatTrangThaiSanPham(Request $request, SanPham $sanPham)
    {
        //trang thai phai nam` trong 4 so', tranh truong` hop thay doi request tai giao dien
        //kiem tra du lieu
        $validate = Validator::make(
            $request->all(),
            ['TrangThai' => ['required', 'numeric', 'integer', Rule::in(0, 1),]],
            [
                'required' => 'Không được để trống',
                'numeric' => 'Phải là số',
                'integer' => 'Phải là số nguyên',
                'in' => 'Trạng thái sai theo chuẩn',
            ]
        );
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);


        $sanPham->update([
            'TrangThai' => $request["TrangThai"],
        ]);
        return response()->json([], 200);
    }
}
