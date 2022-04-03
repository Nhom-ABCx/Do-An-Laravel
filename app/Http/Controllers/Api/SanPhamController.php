<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/SanPhamController --api --model=SanPham
use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class SanPhamController extends Controller
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
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SanPham $sanPham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
    public function API_SanPham_CrossJoin(Request $request)
    {
        //https://stackoverflow.com/questions/63631114/how-can-i-cross-join-dynamically-in-laravel

        //dd($request->all());
        //ep' kieu? mang? request thanh` dang collect va` reset lai key
        $data = collect($request->all())->values();

        foreach ($data as $key => $item) {
            //ghi de` lai` mang? thu'[0] thanh` 1 mang? du lieu moi'
            //ep' kieu? mang? $item thanh` collect, sau do' chi lay' phan` tu? co' ten 'value'
            $data[$key] = (collect($item)->pluck("value"));
        }
        //$data = [["128 GB", "256 GB", "512 GB", "1024 GB"], ["Vàng đồng", "Xám", "Bạc", "Xanh dương"]];
        //The kind of explodes all elements in the array and sets them as paramenters.(...$options)

        return response()->json(Arr::crossJoin(...$data), 200);
    }
}
