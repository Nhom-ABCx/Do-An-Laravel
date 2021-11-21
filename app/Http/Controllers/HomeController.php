<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
         //lay ra het' tat ca du lieu tu modal SanPham luu vao trong bien'
        $dsSanPham=SanPham::all();
        //truyen cai' bien' do' ra view
        return view('Home',['dsSanPham'=>$dsSanPham]);
    }
}
