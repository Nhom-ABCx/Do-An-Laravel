<?php

namespace App\Http\Controllers;

use App\Models\SlideShow;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlideShowRequest;
use App\Http\Requests\UpdateSlideShowRequest;

class SlideShowController extends Controller
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
     * @param  \App\Http\Requests\StoreSlideShowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlideShowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function show(SlideShow $slideShow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideShow $slideShow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSlideShowRequest  $request
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlideShowRequest $request, SlideShow $slideShow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SlideShow  $slideShow
     * @return \Illuminate\Http\Response
     */
    public function destroy(SlideShow $slideShow)
    {
        //
    }
}
