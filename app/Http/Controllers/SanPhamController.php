<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\HangSanXuat;
use Facade\FlareClient\View;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            $data=$data->where('TenSanPham', 'LIKE', '%' . Str::of($request->input('TenSanPham'))->trim() . '%');
        if (!empty($request->input('HangSanXuatId')))
            $data=$data->where('HangSanXuatId', $request->input('HangSanXuatId'));
        if (!empty($request->input('LoaiSanPhamId')))
            $data=$data->where('LoaiSanPhamId', $request->input('LoaiSanPhamId'));

        foreach ($data as $sp)
            $this->fixImage($sp);
        //gọi fixImage cho từng sp
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //tra lai resquet ve cho view de hien thi lai tim` kiem' cu?
        return view('SanPham.SanPham-index', ["sanPham" => $data, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat, 'request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstLoaiSanPham = LoaiSanPham::all();
        $lstHangSanXuat = HangSanXuat::all();
        //truyền thêm danh sách loại sản phẩm để tạo thẻ <options>
        return view('SanPham.SanPham-create', ['lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //xác thực đầu vào, xem các luật tại https://laravel.com/docs/8.x/validation#available-validation-rules
        $request->validate(
            [
                'TenSanPham' => ['required', 'unique:san_phams,TenSanPham', 'max:255'],
                'MoTa' => ['max:255'],
                'SoLuongTon' => ['required', 'numeric', 'integer', 'min:0'],
                'GiaNhap' => ['required', 'numeric', 'integer', 'min:0'],
                'GiaBan' => ['numeric', 'integer', 'min:0'],
                'HinhAnh' => ['required', 'image'],
                'HangSanXuatId' => ['required', 'numeric', 'integer', 'exists:loai_san_phams,id'],
                'LoaiSanPhamId' => ['required', 'numeric', 'integer', 'exists:hang_san_xuats,id'],
            ]
        );

        $sanPham = new SanPham();
        $sanPham->fill([
            'TenSanPham' => $request->input('TenSanPham'),
            'MoTa' => $request->input('MoTa') ?? '',
            'SoLuongTon' => $request->input('SoLuongTon'),
            'GiaNhap' => $request->input('GiaNhap'),
            'GiaBan' => $request->input('GiaBan') ?? 0,
            'HinhAnh' => '', //cap nhat sau
            'LuotMua' => 0,
            'HangSanXuatId' => $request->input('HangSanXuatId'),
            'LoaiSanPhamId' => $request->input('LoaiSanPhamId'),
        ]);
        $sanPham->save(); //luu xong moi có mã sản phẩm

        if ($request->hasFile('HinhAnh')) {
            $sanPham->HinhAnh = $request->file('HinhAnh')->store('assets/images/product-image/' . $sanPham->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $sanPham->HinhAnh);
            $sanPham->HinhAnh = $catChuoi[4];
        }

        $sanPham->save(); //luu lại đường dẫn hình
        return Redirect::route('SanPham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        dd($sanPham);
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
        return view('SanPham.SanPham-edit', ['sanPham' => $sanPham, 'lstLoaiSanPham' => $lstLoaiSanPham, 'lstHangSanXuat' => $lstHangSanXuat]);
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
        $sanPham->delete();
        return Redirect::route('SanPham.index');
    }
    //phương thức hỗ trợ load hình ảnh và thay thế bằng hình mạc định nếu ko tìm thấy file
    public function fixImage(SanPham $sanPham)
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

    //API
    public function API_SanPham()
    {
        $data = SanPham::all();
        //return json_encode($data);
        return response()->json($data, 200);
    }
}
