<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use App\Models\CT_HoaDon;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\SanPhamController;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanphamctl = new SanPhamController;
        $lstKhachHang = KhachHang::all();
        $lstSanPham = SanPham::all();
        $data = BinhLuan::all();
        foreach ($lstSanPham as $sp){
            $sanphamctl->fixImage($sp);
        }
        //dd($lstSanPham);
           
        return view('BinhLuan.binh-luan-index', ["bLuan" => $data, 'khachHang' => $lstKhachHang, 'sanPham' => $lstSanPham]);
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
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function show(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function edit(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinhLuan $binhLuan)
    {
        $binhLuan->delete();
        return Redirect::route('BinhLuan.index');
    }

    #api


    #api binh luan
    public function API_Get_BinhLuan_SanPham(SanPham $sanPham)
    {
        $data = DB::table("san_phams")
            ->join("binh_luans", "san_phams.id", "=", "binh_luans.SanPhamId")
            ->join("khach_hangs", "khach_hangs.id", "=", "binh_luans.KhachHangId")
            ->select("binh_luans.*", "khach_hangs.Username", "khach_hangs.HoTen", "khach_hangs.HinhAnh")
            ->where("binh_luans.SanPhamId", $sanPham->id)
            ->where("san_phams.deleted_at", null)
            ->where("khach_hangs.deleted_at", null)
            ->where("binh_luans.deleted_at", null)
            ->get();
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }

    #tra ve san pham khach hang dang nhap duoc binh luan
    public function API_Check_Auth_ProductToPay(Request $request)
    {
        //dd($request["KhachHangId"]);
        //lay ra het tat ca hoa don co' trang thai' la 2, thuoc khach' hang nao
        $hoaDon = HoaDon::join("dia_chis", "hoa_dons.DiaChiId", "=", "dia_chis.id")
            ->where("dia_chis.KhachHangId", $request["KhachHangId"])
            ->where("TrangThai", 2)
            ->get("hoa_dons.*");

        // $hoaDon = HoaDon::leftJoin('dia_chis', 'dia_chis.id', '=', 'hoa_dons.DiaChiId')->where('dia_chis.KhachHangId', 1)
        //     ->select('hoa_dons.*', 'dia_chis.KhachHangId')
        //     ->get();

        //dd($hoaDon);
        $dsSanPhamDuocMua = []; //bien' tam
        $i = 0; //bien' tam
        foreach ($hoaDon as $item) {
            //tung phan tu cua hoa' don, lay ra danh sach' chi tiet' hoa' don
            $dsCTHoaDon = CT_HoaDon::where("HoaDonId", $item->id)->get();
            //cai' file insert random du lieu ao? co 1 so' chi tiet hoa don no' ko co' nen phai cho vo !empty
            if (!empty($dsCTHoaDon)) { //neu' hoa don ko rong~
                foreach ($dsCTHoaDon as $ct) {
                    //tung phan tu? cua chi tiet hoa don lay' ra SanPham
                    $sanPham = $ct->SanPham;
                    //them cai' san pham lay da do' vao 1 mang?
                    $data = Arr::add($dsSanPhamDuocMua, "$i", $sanPham);
                    //gan' lai phan tu? dc them vao`
                    $dsSanPhamDuocMua = $data;
                    //$this->API_Them_SanPham_To_CT_Hoa_Don($dsSanPhamDuocMua);
                    $i++; //bien' ao? i tang len de no co the them vao tiep theo
                }
            }
        }
        //dd($dsSanPhamDuocMua);
        return response()->json($dsSanPhamDuocMua, 200); //xuat ra ket qua
    }
    # thêm bình luân 
    public function API_Add_BinhLuan_SanPham(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'NoiDung' => ['required'],
            'KhachHangId' => ['required', 'numeric', 'integer', 'exists:khach_hangs,id'],
            "SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $binhLuan = BinhLuan::firstOrCreate([
            'NoiDung'        => $request['NoiDung'],
            'KhachHangId'     => $request['KhachHangId'],
            'SanPhamId'       => $request["SanPhamId"],
        ]);
        $data = $binhLuan;
        if (!empty($data))
            return response()->json($data, 200);
        return response()->json($data, 404);
    }
}