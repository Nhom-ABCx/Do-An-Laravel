<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/ApiSlideShowController --api --model=SlideShow

use App\Http\Controllers\Controller;
use App\Models\SlideShow;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ApiSlideShowController extends Controller
{
    /**
     * Custom hinh` anh? tra? ve` (tra? ve` luon duong` dan~)
     */
    public function getBanner()
    {
        $data = SlideShow::all();
        foreach ($data as $hinhAnh)
            $hinhAnh->HinhAnh = Storage::url("assets/images/banner/{$hinhAnh->HinhAnh}");
        return response()->json($data);
    }
}
