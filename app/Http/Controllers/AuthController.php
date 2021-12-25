<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
class AuthController extends Controller
{
    //composer require laravel/ui --dev
    //php artisan ui vue --auth
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.Login-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Login.Login-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Username' => ['required','unique:nhan_viens,Username'],
            'Email'=>['required','unique:nhan_viens,Email'],
            'Phone'=>['required'],
            'MatKhau' => ['required'],
            'XacNhan_MatKhau'=>['required','same:MatKhau'],
        ]);

        $user = NhanVien::create([
            'Username'       => strip_tags($request->input('Username')),
            'Email'       => strip_tags($request->input('Email')),
            'Phone'       => strip_tags($request->input('Phone')),
            'MatKhau'         => Hash::make($request->input('password')),
            'HoTen'=>'', //cap nhat sau
            'NgaySinh'=>date('Y-m-d H:i:s'),
            'GioiTinh'=>0,
            'DiaChi'=>'',
            'HinhAnh'=>'',
            'remember_token'=> Str::random(32),
        ]);
        event(new Registered($user)); //luu vo database
        Auth::login($user); //thuc hien dang nhap voi tai khoan do'
        return Redirect::route('Home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //dang nhap ne`
    public function show(Request $request)
    {
        $request->validate([
            'Username' => ['required'],
            'MatKhau' => ['required'],
        ]);
        $select = NhanVien::where('Username', $request->input("Username"))->where('MatKhau', $request->input("MatKhau"))->first();
        if (!empty($select)) { //neu' ko rong~
            Auth::login($select);
            //$request->session()->regenerate();
            //return redirect()->intended('/');
            return Redirect::route('SanPham.index');
        }
        return back()->withErrors(['Username'=>'Sai Username hoac mat khau']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        //$request->session()->invalidate();
        //$request->session()->regenerateToken();
        return Redirect::route('Login.index');
    }
    public function github()
    {
        //gui request len github
        return Socialite::driver('github')->redirect();
    }

    public function github_callback()
    {
        //nhan du lieu tu github tra ve
        $user = Socialite::driver('github')->user();
        //dd($user);
        $user=NhanVien::firstOrCreate([
            'Email'=>$user->email
        ],[
            'Username'=>$user->nickname,
            'HoTen'=>$user->name,
            "NgaySinh"=>date('Y-m-d H:i:s'),
            "GioiTinh"=>0,
            "MatKhau"=>$user->nickname,
            "HinhAnh"=>$user->avatar,
        ]);
        Auth::login($user); //thuc hien dang nhap voi tai khoan do'
        return Redirect::route('SanPham.index');
    }
    public function google()
    {
        //gui request len google
        return Socialite::driver('google')->redirect();
    }

    public function google_callback()
    {
        //nhan du lieu tu google tra ve
        $user = Socialite::driver('google')->user();
        //dd($user);
        $username = substr($user->email, 0, strpos($user->email, '@'));
        //do google nickname no' rong~ nen de? tam nhu v
        $user=NhanVien::firstOrCreate([
            'Email'=>$user->email
        ],[
            'Username'=>$user->nickname??$username,
            'HoTen'=>$user->name,
            "NgaySinh"=>date('Y-m-d H:i:s'),
            "GioiTinh"=>0,
            "MatKhau"=>$username,
            "HinhAnh"=>$user->avatar,
        ]);
        Auth::login($user); //thuc hien dang nhap voi tai khoan do'
        return Redirect::route('SanPham.index');
    }
}
