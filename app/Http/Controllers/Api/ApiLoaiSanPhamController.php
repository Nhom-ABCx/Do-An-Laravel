<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Admin\LoaiSanPhamController;
use App\Http\Controllers\Controller;
use App\Models\LoaiSanPham;
use Illuminate\Http\Request;

class ApiLoaiSanPhamController extends Controller
{
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

        LoaiSanPhamController::filter($data, $request);


        return response()->json($data->toTree(), 200);
    }
}
