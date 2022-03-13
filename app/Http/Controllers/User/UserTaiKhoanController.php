<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\TaiKhoan;
use GrahamCampbell\ResultType\Result;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User.TaiKhoan.Profile");
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
     * @param  \App\Models\TaiKhoan  $TaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function show(TaiKhoan $TaiKhoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaiKhoan  $TaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(TaiKhoan $TaiKhoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaiKhoan  $TaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaiKhoan $TaiKhoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaiKhoan  $TaiKhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaiKhoan $TaiKhoan)
    {

    }
}
