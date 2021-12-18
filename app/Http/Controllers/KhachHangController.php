<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
class KhachHangController extends Controller
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
     * @param  \App\Models\KhachHang  $khachHang
     * @return \Illuminate\Http\Response
     */
    public function show(KhachHang $khachHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KhachHang  $khachHang
     * @return \Illuminate\Http\Response
     */
    public function edit(KhachHang $khachHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KhachHang  $khachHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KhachHang $khachHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KhachHang  $khachHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KhachHang $khachHang)
    {
        //
    }
    //API
    public function API_DangNhap(Request $request)
    {
        //select * from KhachHang where MatKhau=$MatKhau and (Email=$Email or Username=$Username or Phone=$Phone)
        $data = KhachHang::
        where('MatKhau', $request['MatKhau'])
        ->Where(function($query) use($request) {
            $query->orwhere('Email', $request['Email'])
            ->orwhere('Username', $request['Username'])
            ->orwhere('Phone', $request['Phone']);
        })
        ->first();
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
        //nguoc lai du lieu rong~ thi tra ve status 404
        return response()->json($data, 404);
    }
    public function API_DangKy(Request $request)
    {
        //kiem tra du lieu
        $validate=Validator::make($request->all(),[
            'Username' => ['required','unique:khach_hangs'],
            'Email'=>['required','unique:khach_hangs,Email'],
            'MatKhau' => ['required'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if($validate->fails())
        return response()->json($validate->errors(),400);

        $khachHang = KhachHang::create([
            'Username'       => strip_tags($request['Username']),
            'Email'       => strip_tags($request['Email']),
            //'MatKhau'         => Hash::make($request['MatKhau']),
            'MatKhau'         => strip_tags($request['MatKhau']),
            'HoTen'=>'', //cap nhat sau
            'NgaySinh'=>date('Y-m-d H:i:s'),
            'GioiTinh'=>0,
            'DiaChi'=>'',
            'HinhAnh'=>'',
        ]);

        $data = $khachHang;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_KhachHang(Request $request, KhachHang $khachHang)
    {
        //kiem tra du lieu
        $validate=Validator::make($request->all(),[
        'Username' => ["required"],
        'Email'=>["required","Email"],
        //'Phone'=>['numeric', 'integer', 'min:0'],
        'Phone'=>[],
        'MatKhau'=>["required"],
        'HoTen'=>[],
        'NgaySinh'=>["date"],
        'GioiTinh'=>["boolean"],
        'DiaChi'=>[],
        'HinhAnh'=>[],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if($validate->fails())
        return response()->json($validate->errors(),400);

        $khachHang->fill([
        'Username'=>$request['Username'],
        'Email'=>$request['Email'],
        'Phone'=>$request['Phone'],
        'MatKhau'=>$request['MatKhau'],
        'HoTen'=>$request['HoTen'],
        'NgaySinh'=>$request['NgaySinh'],
        'GioiTinh'=>$request['GioiTinh'],
        'DiaChi'=>$request['DiaChi'],
        'HinhAnh'=>$request['HinhAnh'],
        ]);
        $khachHang->save();

        $data = $khachHang;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        // if (!empty($data))
        //     return response()->json($data, 200);
             return response()->json($data, 200);
    }
}
