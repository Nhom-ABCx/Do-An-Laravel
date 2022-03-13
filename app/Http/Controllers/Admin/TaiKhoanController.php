<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\TaiKhoan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TaiKhoan::all();

        // dd($data);
        return view("Admin.TaiKhoan.TaiKhoan-index", ["taiKhoan" => $data]);
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
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $taiKhoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $taiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaiKhoan $taiKhoan)
    {
        // dd($taiKhoan);
        $taiKhoan->delete();
        return Redirect::route('TaiKhoan.index');
    }
    public function TaiKhoan_DS_Den(Request $request)
    {
        $data = TaiKhoan::onlyTrashed()->get();
        return view('Admin.TaiKhoan.TaiKhoan-index', ['taiKhoan' => $data, 'request' => $request]);
    }
    public function KhoiPhucTaiKhoan($id)
    {
        // dd($id);
        $data = TaiKhoan::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('TaiKhoan.dsDen');
    }

    //Api

    public function showResetPassword_TaiKhoan($token)
    {
        $taiKhoan = TaiKhoan::where("remember_token", $token)->first();
        if (!empty($taiKhoan))
            return view('Admin.Login.ResetPassword', ['taiKhoan' => $taiKhoan]);
        return "Tai khoan cua ban co ve da duoc thay doi~";
    }
    public function actionResetPassword_TaiKhoan(Request $request, TaiKhoan $taiKhoan)
    {
        $request->validate([
            'MatKhau' => ['required'],
            'XacNhan_MatKhau' => ['required', 'same:MatKhau'],
        ]);

        $taiKhoan->fill(['MatKhau' => $request['MatKhau']]);
        $taiKhoan->remember_token = Str::random(60); //tao moi 1 token
        $taiKhoan->save();

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
    //API
    public function API_DangNhap(Request $request)
    {
        //select * from TaiKhoan where MatKhau=$MatKhau and (Email=$Email or Username=$Username or Phone=$Phone)
        $data = TaiKhoan::where('MatKhau', $request['MatKhau'])
            ->Where(function ($query) use ($request) {
                $query->orwhere('Email', $request['Email'])
                    ->orwhere('Username', $request['Username'])
                    ->orwhere('Phone', $request['Phone']);
            })
            ->first();

        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data)) {
            $data->HinhAnh = TaiKhoanController::fixImage($data->HinhAnh);
            return response()->json($data, 200);
        }
        //nguoc lai du lieu rong~ thi tra ve status 404
        return response()->json($data, 404);
    }
    public function API_DangKy(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'Username' => ['required', 'unique:khach_hangs,Username'],
            'Email' => ['required', 'unique:khach_hangs,Email', "regex:/(.+)@(.+)\.(.+)/i"],
            'MatKhau' => ['required'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $taiKhoan = TaiKhoan::firstOrCreate([
            'Username'       => strip_tags($request['Username']),
            'Email'       => strip_tags($request['Email']),
        ], [
            //'MatKhau'         => Hash::make($request['MatKhau']),
            'MatKhau'         => strip_tags($request['MatKhau']),
            'HoTen' => '', //cap nhat sau
            'NgaySinh' => date('Y-m-d H:i:s'),
            'GioiTinh' => 0,
            "Phone" => 0,
            "DiaChi" => "",
        ]);

        $data = $taiKhoan;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_TaiKhoan(Request $request, TaiKhoan $taiKhoan)
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

        $taiKhoan->fill([
            'Username' => $request['Username'],
            'Email' => $request['Email'],
            'Phone' => $request['Phone'],
            //'MatKhau'=>$request['MatKhau'],
            'HoTen' => $request['HoTen'],
            'NgaySinh' => $request['NgaySinh'],
            'GioiTinh' => $request['GioiTinh'],
            'DiaChi' => $request['DiaChi'],
        ]);
        $taiKhoan->save();

        $data = $taiKhoan;
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Update_TaiKhoan_HinhAnh(Request $request, $id)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'HinhAnh' => ["image", "max:102400"], //max:100 Mb
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        $taiKhoan = TaiKhoan::find($id);

        //kiem tra upload hinh anh
        if ($request->hasFile('HinhAnh')) {
            $taiKhoan->HinhAnh = "/storage/" . $request->file('HinhAnh')->store('assets/images/avatar/User/' . $taiKhoan->id, 'public');
            $taiKhoan->save();
        } else
            return response()->json(["NoImage" => "No image request"], 400);

        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($taiKhoan)) {
            $taiKhoan->HinhAnh = $this->fixImage($taiKhoan->HinhAnh);
            return response()->json($taiKhoan, 200);
        }
        return response()->json([], 400);
    }

    public function API_Update_TaiKhoan_MatKhau(Request $request, TaiKhoan $taiKhoan)
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
        if ($taiKhoan->MatKhau != $request['oldMatKhau'])
            return response()->json(['oldMatKhau' => "wrong password"], 400);
        else if ($taiKhoan->MatKhau == $request['MatKhau'])
            return response()->json(['MatKhau' => "New password matches your old password"], 400);

        $taiKhoan->fill(['MatKhau' => $request['MatKhau'],]);
        $taiKhoan->save();

        $data = $taiKhoan;
        if (!empty($data))
            return response()->json($data, 200);
    }

    public function API_Get_TaiKhoan(TaiKhoan $taiKhoan)
    {
        if (!empty($taiKhoan)) {
            $taiKhoan->HinhAnh = TaiKhoanController::fixImage($taiKhoan->HinhAnh);
            return response()->json($taiKhoan, 200);
        }
        return response()->json(["Error" => "Item Not found"], 404);
    }

    public function API_DangKy_Social(Request $request)
    {
        //do google nickname no' rong~ nen de? tam nhu v
        //lay tu doan dau` cho den' truoc' vi tri @
        $username = substr($request['Email'], 0, strpos($request['Email'], '@'));
        $taiKhoan = TaiKhoan::firstOrCreate([
            'Username'       => $username,
            'Email'       => $request['Email'],
        ], [
            'HoTen' => $request["HoTen"], //cap nhat sau
            'NgaySinh' => date('Y-m-d H:i:s'),
            'GioiTinh' => 0,
            'MatKhau'         => $username,
            //'MatKhau'         => Hash::make($request['MatKhau']),
            "Phone" => 0,
            "DiaChi" => "",
            "HinhAnh" => $request["HinhAnh"],
        ]);

        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($taiKhoan)) {
            $taiKhoan->HinhAnh = $this->fixImage($taiKhoan->HinhAnh);
            return response()->json($taiKhoan, 200);
        }
        return response()->json(["Error" => "Item Not found"], 404);
    }
}
