<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/ApiLoaiSanPhamController --api --model=LoaiSanPham

use App\Http\Controllers\Admin\LoaiSanPhamController;
use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class ApiLoaiSanPhamController extends Controller
{
    //https://github.com/lazychaser/laravel-nestedset
    /**
     * search hoặc lấy hết data (nếu null thì lấy hết)
     *
     * @return json
     * @property-read string
     * @property-read int
     */
    public function search(Request $request)
    {
        //lay het san pham
        $data = LoaiSanPham::from(app(LoaiSanPham::class)->getTable());

        //lay ra to? tien
        // $result = LoaiSanPham::ancestorsOf(9);
        //to? tien va` ban than
        //$result = LoaiSanPham::ancestorsAndSelf(9);
        //con chau'
        //$result = LoaiSanPham::descendantsOf(9);
        //con chau' va` ban? than
        //$result = LoaiSanPham::descendantsAndSelf(9);
        //$result = LoaiSanPham::defaultOrder()->ancestorsOf(9);
        //lay' ra theo do sau cua? loai
        //$result = LoaiSanPham::withDepth()->having('depth', '=', 1)->get();


        //$depth = $result->depth;

        LoaiSanPhamController::filter($data, $request);


        return response()->json($data->toTree(), 200);
    }
}
