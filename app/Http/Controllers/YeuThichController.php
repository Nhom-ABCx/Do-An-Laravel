<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\YeuThich;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Translation\Provider\Dsn;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class YeuThichController extends Controller
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
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function show(YeuThich $yeuThich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function edit(YeuThich $yeuThich)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YeuThich $yeuThich)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\YeuThich  $yeuThich
     * @return \Illuminate\Http\Response
     */
    public function destroy(YeuThich $yeuThich)
    {
        //
    }
    //ham`ho tro API
    public static function Them_isFavorite_Vao_ListSanPham($ListsanPham, Request $request)
    {
        //neu' request co' khachangId va` no' co' gia' tri (tuc' ko rong~)
        //$value=$request["KhachHangId]                     su dung bien' sanPham o ngoai`
        $request->whenFilled('KhachHangId', function ($value) use ($ListsanPham) {
            //thuc hien cau lenh neu' ko rong~
            foreach ($ListsanPham as $item) {
                //lay ra thu~ yeu thich'
                $yeuThich = YeuThich::where("KhachHangId", $value)->where("SanPhamId", $item->id)->first();
                //neu' co' du~lieu thi` danh' dau' isFavorite la` 1
                if (!empty($yeuThich))
                    Arr::add($item, "isFavorite", 1);
                else
                    Arr::add($item, "isFavorite", 0);
            }
        }, function () use ($ListsanPham) {
            //thuc hien cau lenh neu' rong~
            //tung phan tu cua danh san $sanPham, them vao no thuoc tinh isFavorite=0 neu' chua co' request KhachHangId dang nhap
            foreach ($ListsanPham as $item)
                Arr::add($item, "isFavorite", 0);
        });
    }
    //API
    public function API_Get_YeuThich(KhachHang $khachHang)
    {
        $dsYeuThich = $khachHang->YeuThich;

        return response()->json($dsYeuThich, 200);
    }

    public function API_Get_SanPham_YeuThich(Request $request)
    {
        $khachHang=KhachHang::find($request["KhachHangId"]);
        $dsYeuThich = $khachHang->YeuThich;

        $dsSanPham = [];
        $i = 0;
        foreach ($dsYeuThich as $item) {
            $sanPham = SanPham::find($item->SanPhamId);

            $data = Arr::add($dsSanPham, "$i", $sanPham);

            $dsSanPham = $data;
            $i++;
        }

        YeuThichController::Them_isFavorite_Vao_ListSanPham($dsSanPham, $request);
        SanPhamController::Them_Star_Vao_ListSanPham($dsSanPham);
        return response()->json($dsSanPham, 200);
    }

    public function API_Insert_KhachHang_YeuThich_SanPham(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $yeuThich = YeuThich::firstOrCreate([
            'KhachHangId'       => $request['KhachHangId'],
            'SanPhamId'       => $request["SanPhamId"],
        ]);

        $data = $yeuThich;
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }
    public function API_Delete_KhachHang_YeuThich_SanPham(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $yeuThich = YeuThich::where("KhachHangId", $request["KhachHangId"])->where("SanPhamId", $request["SanPhamId"])->first();

        if (!empty($yeuThich))
            {$data=$yeuThich->delete();
             return response()->json($data, 200);}
        return response()->json($yeuThich, 404);
    }
}
