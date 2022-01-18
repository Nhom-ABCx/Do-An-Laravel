<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use GrahamCampbell\ResultType\Result;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KhachHang::all();
        // dd($data);
        return view("KhachHang.KhachHang-index", ["khachHang" => $data]);
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
        // dd($khachHang);
        $khachHang->delete();
        return Redirect::route('KhachHang.index');
    }
    public function KhachHang_DS_Den(Request $request)
    {
        $data = KhachHang::onlyTrashed()->get();
        return view('KhachHang.KhachHang-index', ['khachHang' => $data, 'request' => $request]);
    }

    public function showResetPassword_KhachHang($token)
    {
        $khachHang = KhachHang::where("remember_token", $token)->first();
        if (!empty($khachHang))
            return view('Login.ResetPassword', ['khachHang' => $khachHang]);
        return "Tai khoan cua ban co ve da duoc thay doi~";
    }
    public function actionResetPassword_KhachHang(Request $request, KhachHang $khachHang)
    {
        $request->validate([
            'MatKhau' => ['required'],
            'XacNhan_MatKhau' => ['required', 'same:MatKhau'],
        ]);

        $khachHang->fill(['MatKhau' => $request['MatKhau']]);
        $khachHang->remember_token = Str::random(60); //tao moi 1 token
        $khachHang->save();

        return Redirect::route('Home.Susscess');
    }

    //API
    public function API_DangNhap(Request $request)
    {
        //select * from KhachHang where MatKhau=$MatKhau and (Email=$Email or Username=$Username or Phone=$Phone)
        $data = KhachHang::where('MatKhau', $request['MatKhau'])
            ->Where(function ($query) use ($request) {
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
        $validate = Validator::make($request->all(), [
            'Username' => ['required', 'unique:khach_hangs'],
            'Email' => ['required', 'unique:khach_hangs,Email'],
            'MatKhau' => ['required'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $khachHang = KhachHang::create([
            'Username'       => strip_tags($request['Username']),
            'Email'       => strip_tags($request['Email']),
            'Phone' => "0",
            //'MatKhau'         => Hash::make($request['MatKhau']),
            'MatKhau'         => strip_tags($request['MatKhau']),
            'HoTen' => '', //cap nhat sau
            'NgaySinh' => date('Y-m-d H:i:s'),
            'GioiTinh' => 0,
            'DiaChi' => '',
            'HinhAnh' => '',
        ]);

        $data = $khachHang;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_KhachHang(Request $request, KhachHang $khachHang)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'Username' => ["required"],
            'Email' => ["required", "Email"],
            'Phone' => ['required', 'numeric'],
            //'MatKhau'=>["required"],
            'HoTen' => [],
            'NgaySinh' => ["date"],
            'GioiTinh' => ["boolean"],
            'DiaChi' => [],
            'HinhAnh' => [],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $khachHang->fill([
            'Username' => $request['Username'],
            'Email' => $request['Email'],
            'Phone' => $request['Phone'],
            //'MatKhau'=>$request['MatKhau'],
            'HoTen' => $request['HoTen'],
            'NgaySinh' => $request['NgaySinh'],
            'GioiTinh' => $request['GioiTinh'],
            'DiaChi' => $request['DiaChi'],
        ]);
        $khachHang->save();

        $data = $khachHang;
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_KhachHang_HinhAnh(Request $request, $id)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'HinhAnh' => ["image", "max:102400"], //max:100 Mb
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        $khachHang = KhachHang::find($id);

        //kiem tra upload hinh anh
        if ($request->hasFile('HinhAnh')) {
            $khachHang->HinhAnh = $request->file('HinhAnh')->store('assets/images/avatar/User/' . $khachHang->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $khachHang->HinhAnh);
            $khachHang->HinhAnh = $catChuoi[5];
            $khachHang->save();
        } else
            return response()->json(["NoImage" => "No image request"], 400);

        $data = $khachHang;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_KhachHang_MatKhau(Request $request, KhachHang $khachHang)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'oldMatKhau' => ['required'],
            'MatKhau' => ['required'],
            'XacNhan_MatKhau' => ['required', 'same:MatKhau'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        if ($khachHang->MatKhau != $request['oldMatKhau'])
            return response()->json(['oldMatKhau' => "wrong password"], 400);
        else if ($khachHang->MatKhau == $request['MatKhau'])
            return response()->json(['MatKhau' => "New password matches your old password"], 400);

        $khachHang->fill(['MatKhau' => $request['MatKhau'],]);
        $khachHang->save();

        $data = $khachHang;
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Get_KhachHang(KhachHang $khachHang)
    {
        if (!empty($khachHang))
            return response()->json($khachHang, 200);
        return response()->json(["Error" => "Item Not found"], 404);
    }
}