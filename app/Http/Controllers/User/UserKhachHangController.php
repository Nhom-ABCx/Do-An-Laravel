<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\KhachHang;
use GrahamCampbell\ResultType\Result;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserKhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.KhachHang.Profile");
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
        return view('Admin.KhachHang.KhachHang-index', ['khachHang' => $data, 'request' => $request]);
    }
    public function KhoiPhucKhachHang($id)
    {
        // dd($id);
        $data = KhachHang::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('KhachHang.dsDen');
    }

    //Api

    public function showResetPassword_KhachHang($token)
    {
        $khachHang = KhachHang::where("remember_token", $token)->first();
        if (!empty($khachHang))
            return view('Admin.Login.ResetPassword', ['khachHang' => $khachHang]);
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
    //ham ho tro API
    static public function fixImage(string $hinhAnh)
    {
        //neu' hinh` anh cua khach hang` khong phai la` 1 website co' https/http
        // thi` ta se them dia chi vao truoc chuoi~ de tra ve cho di dong xai`
        if (!(Str::contains($hinhAnh, 'https')) || !(Str::contains($hinhAnh, 'http'))) {
            return "http://10.0.2.2:8000" . $hinhAnh;
        }
        return $hinhAnh;
    }
}
