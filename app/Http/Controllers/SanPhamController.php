<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Models\NhaCungCap;
use Facade\FlareClient\View;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public
use Illuminate\Support\Facades\Redirect;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=SanPham::all();
        foreach ($data as $sp)
            $this->fixImage($sp);
        //gọi fixImage cho từng sp
        return view('SanPham.SanPham-index',["sanPham"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //
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
        $lstLoaiSanPham=LoaiSanPham::all();
        $lstNhaCungCap=NhaCungCap::all();
        //truyền them danh sách loại sản phẩm để tạo thẻ <options
        return view('SanPham.SanPham-edit',['sanPham'=>$sanPham,'lstLoaiSanPham'=>$lstLoaiSanPham,'lstNhaCungCap'=>$lstNhaCungCap]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
    //phương thức hỗ trợ load hình ảnh và thay thế bằng hình mạc định nếu ko tìm thấy file
    public function fixImage(SanPham $sanPham)
    {
        //chạy lệnh sau: php artisan storage:link     de tu tao 1 lien ket den' folder public
        // nếu trong đường dẫn "storage/app/public" + "assets/images/product-image/..." tồn tại hình ảnh
        if  (Storage::disk('public')->exists("assets/images/product-image/".$sanPham->HinhAnh))
            $sanPham->HinhAnh=Storage::url("assets/images/product-image/".$sanPham->HinhAnh);
        else
            $sanPham->HinhAnh=Storage::url("assets/images/404/Img_error.png");
    }
    //API
    public function API_SanPham()
    {
        $data=SanPham::all();
        //return json_encode($data);
        return response()->json($data, 200);
    }
}
