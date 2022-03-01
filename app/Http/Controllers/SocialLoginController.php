<?php

namespace App\Http\Controllers;

use App\Models\SocialLogin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialLoginRequest;
use App\Http\Requests\UpdateSocialLoginRequest;

class SocialLoginController extends Controller
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
     * @param  \App\Http\Requests\StoreSocialLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialLogin  $socialLogin
     * @return \Illuminate\Http\Response
     */
    public function show(SocialLogin $socialLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialLogin  $socialLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialLogin $socialLogin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialLoginRequest  $request
     * @param  \App\Models\SocialLogin  $socialLogin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialLoginRequest $request, SocialLogin $socialLogin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialLogin  $socialLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialLogin $socialLogin)
    {
        //
    }
}
