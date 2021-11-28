<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
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
        //
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
        //
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
        if  (Storage::disk('public/assets/images/product-image/')->exists($sanPham->HinhAnh))
            $sanPham->HinhAnh=Storage::url($sanPham->HinhAnh);
        else
            $sanPham->HinhAnh='/assets/images/404/Img_error.png';
    }
    //API
    public function API_SanPham()
    {
        $data=SanPham::all();
        //return json_encode($data);
        return response()->json($data, 200);
    }
}
