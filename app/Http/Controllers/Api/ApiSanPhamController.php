<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/ApiSanPhamController --api --model=SanPham

use App\Http\Controllers\Admin\ChuongTrinhKhuyenMaiController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Controller;
use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CT_HoaDon;
use App\Models\CT_SanPham;
use App\Models\CTChuongTrinhKM;
use App\Models\SanPham;
use App\Models\SlideShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ApiSanPhamController extends Controller
{
    /**
     * search hoặc lấy hết data (nếu null thì lấy hết)
     *
     * @return json
     * @property-read TenSanPham | OrderBy string
     * @property-read HangSanXuatId | LoaiSanPhamId | fromPrice | toPrice int
     * @property-read TrangThai | isKhuyenMai boolean
     */
    public function search(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'TenSanPham' => ['nullable', 'string'],
            'OrderBy' => ['nullable', 'string'],
            'HangSanXuatId' => ['nullable', 'numeric', 'integer', 'exists:hang_san_xuats,id'],
            'LoaiSanPhamId' => ['nullable', 'numeric', 'integer', 'exists:loai_san_phams,id'],
            "TrangThai" => ['nullable', 'boolean'],
            'fromPrice' => ['nullable', 'numeric'],
            'toPrice' => ['nullable', 'numeric'],
            "isKhuyenMai" => ['nullable', 'boolean'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        //

        $data = new Collection([]);
        //neu' co' request lay' ra khuyen mai~
        if ($request['isKhuyenMai']) {
            //lay' ra ds ct Chuong trinh` khuyen mai dang co'
            $dsCtChuongTrinhKM = ChuongTrinhKhuyenMaiController::danhSachChiTietChuongTrinhKM();

            //lay' ra tat' ca? SanPham co' trong khuyen mai
            foreach ($dsCtChuongTrinhKM as $ctkm) {
                $data[] = $ctkm->CT_SanPham->SanPham;
            }
            //tranh' lap lai san pham khi lay' ra -> xap' xep' lai mang? -> chuyen> no' thanh` queryBuilder
            $data = $data->unique('id')->values()->toQuery();
        } else {
            //lay het san pham
            $data = SanPham::from(app(SanPham::class)->getTable())
                ->with("CT_SanPham") //load them chi tiet
                ->whereRelation("CT_SanPham", "SoLuongTon", ">", 0); //so luong ton` phai >0
        }

        //filter OrderBy, fromPrice, toPrice
        $this->filter($data, $request);
        //filter TenSanPham, HangSanXuatId, LoaiSanPhamId, TrangThai
        SanPhamController::filter($data, $request);

        $this->Them_Star_Vao_ListSanPham($data);
        $this->Them_GiamGia_Vao_ListsanPham($data);
        $this->Them_lstThuocTinh_Vao_ListsanPham($data);
        //isFavorite
        //customImage
        $this->fixImage($data);



        return response()->json($data, 200);
    }
    //ham ho tro API
    public function filter(&$data, Request $request)
    {
        //filter OrderBy
        if (!empty($request['OrderBy']))
            $data = $data->orderByDesc($request['OrderBy']); //sap xep giam? dan`

        //filter fromPrice, toPrice
        $fromPrice = $request["fromPrice"] ?? 0;
        $toPrice = $request["toPrice"] ?? 0;


        if ((empty($fromPrice) || $fromPrice == 0) && !empty($toPrice)) //null vs notnull
            $data = $data->whereRelation("CT_SanPham", "GiaBan", ">=", 0)->whereRelation("CT_SanPham", "GiaBan", "<=", $toPrice);
        else if (!empty($fromPrice && (empty($toPrice)) || $toPrice == 0)) //notnull vs null
            $data = $data->whereRelation("CT_SanPham", "GiaBan", ">=", $fromPrice);
        else if (!empty($fromPrice) && !empty($toPrice)) //notnull vs notnull
            $data = $data->whereRelation("CT_SanPham", "GiaBan", ">=", $fromPrice)->whereRelation("CT_SanPham", "GiaBan", "<=", $toPrice);
        //muon' loai bo? nhung~ CT_SanPham co' gia' outrange ko dc, ko biet query sao
        //cho nen no' lay' ve` het' SanPham co' chi tiet trong doan do' (mien~ Chi tiet co 1 cai' la` lay het)
    }
    /**
     * Ham` nay` chu yeu' them Star vao json tra? ve` luon, de trang' gui request lien tuc len server
     */
    public static function Them_Star_Vao_ListSanPham($ListSanPham)
    {
        foreach ($ListSanPham as $item) {
            $arrayStar = collect([]); //tao 1 mang rong de tinh' trung binh` danh' gia'
            foreach ($item->CT_SanPham as $ctSanPham) {
                $arrayStar = $arrayStar->merge($ctSanPham->CT_HoaDon->pluck('Star')); //lay ra so' sao lưu vao mang?

                unset($ctSanPham->CT_HoaDon); //xoa' cai' ct_hoa don` di de no ko tra? ve` theo
            }
            $star = $arrayStar->reject(function ($item) {
                return $item == 0; //neu' no' =0 thi` xoa' no' di, ko tinh' trung binh` danh' gia' =0
            })->avg(); //tinh trung binh`

            //them Star , tuong tu nhu Array::add()
            $item["Star"] = $star ?? 0;
        }
    }
    /**
     * Ham` nay` chu yeu' them GiamGia vao json tra? ve` luon, de trang' gui request lien tuc len server
     */
    public static function Them_GiamGia_Vao_ListsanPham($ListSanPham)
    {
        //lay ra cac chi tiet khuyen mai dang giam gia'
        $dsCtChuongTrinhKM = ChuongTrinhKhuyenMaiController::danhSachChiTietChuongTrinhKM();
        //lay ra tat ca id san pham dang giam gia' luu vao trong mang?
        $idSanPhamGiamGia = $dsCtChuongTrinhKM->pluck("id")->all();
        //tung phan tu cua danh sach San Pham
        foreach ($ListSanPham as $item) {
            //neu' id san pham do' ko thuoc san pham dang giam gia' thi GiamGia=0
            foreach ($item->CT_SanPham as $ctSanPham) {
                if (!in_array($ctSanPham->id, $idSanPhamGiamGia))
                    $ctSanPham["GiamGia"] = 0;
                //nguoc lai tim` xem san pham giam? gia' do' no' Gia'Giam? bao nhieu
                else {
                    foreach ($dsCtChuongTrinhKM as $ctkm) {
                        if ($ctSanPham->id == $ctkm->CTSanPhamId)
                            $ctSanPham["GiamGia"] = $ctkm->GiamGia;
                    }
                }
            }
        }
    }
    /**
     * them lstThuocTinh vao` trong mang? SanPham
     */
    public static function Them_lstThuocTinh_Vao_ListsanPham($ListSanPham)
    {
        foreach ($ListSanPham as $item) {
            $item["lstThuocTinhValue"] = $item->lstThuocTinh();
        }
    }
    /**
     * Custom hinh` anh? tra? ve` (tra? ve` luon duong` dan~)
     */
    public function fixImage($ListSanPham)
    {
        foreach ($ListSanPham as $item) {
            foreach ($item->HinhAnh as $hinhAnh)
                $hinhAnh->HinhAnh = Storage::url("assets/images/product-image/{$hinhAnh->SanPhamId}/{$hinhAnh->HinhAnh}");
        }
    }
}
