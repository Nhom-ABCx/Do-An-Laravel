<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail as SendMail;
use App\Models\SanPham;
use App\Models\KhachHang;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        //gửi đến 0306191113@caothang.edu.vn với dữ liệu là $request
        //nó sẽ gọi đến SendMail.php
        ////Mail::to('0306191113@caothang.edu.vn')->send(new SendMail("Tiêu đề"));
        $data = [
            'TieuDe' => 'Tiêu đề nè',
            'NguoiGui'=>'Đạt gửi tin nè',
            'View'=>'Login.User-reset',
            'Data'=>SanPham::find(1),
        ];
        $emailGuiDen = '0306191113@caothang.edu.vn'; //mail của đạt

        Mail::to($emailGuiDen)->send(new SendMail($data));
    }

    function userReset(Request $request)
    {
        //tim kiem khah hang co user name hoac mat khau? trung` voi request
        $khachHang = KhachHang::
        Where(function($query) use($request) {
            $query->orwhere('Email', $request['Email'])
            ->orwhere('Username', $request['Username']);
            //->orwhere('Username', "Khach01");
        })
        ->first();

        if($khachHang==null)
        return response()->json(["Username"=>"User name or email not found"],400);

        $data = [
            'TieuDe' => 'ShopSuHa-Reset your password',
            'NguoiGui'=>'ShopSuHa',
            'View'=>'Login.mailUser-reset',
            'Data'=>$khachHang,
        ];

        $emailGuiDen = '0306191113@caothang.edu.vn';//mail của đạt

        Mail::to($emailGuiDen)->send(new SendMail($data));
        //return view($data['View'],["data"=>$data['Data']]);

        return response()->json(["Success"=>true]);
    }
}
