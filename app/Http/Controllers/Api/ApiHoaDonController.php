<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/ApiHoaDonController --api --model=HoaDon

use App\Http\Controllers\Controller;
use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Enums\TrangThaiHD;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use App\Models\DiaChi;
use App\Models\GioHang;
use App\Models\CT_HoaDon;
use App\Models\Voucher_TaiKhoan;
use Illuminate\Support\Facades\DB;

class ApiHoaDonController extends Controller
{
    /**
     * search hoặc lấy hết data (nếu null thì lấy hết)
     *
     * @return json
     * @property-read TrangThai int
     * @property-read DaXoa boolean
     */
    public function search(Request $request)
    {
        //trang thai phai nam` trong 4 so', tranh truong` hop thay doi request tai giao dien
        $validate = Validator::make($request->all(), [
            'TrangThai' => ['nullable', 'numeric', 'integer', Rule::in(TrangThaiHD::getValues())],
            'DaXoa' => ['nullable', 'boolean'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);
        //

        $data = new Collection([]);
        if ($request['DaXoa']) {
            $data = HoaDon::onlyTrashed();
        } else {
            $data = HoaDon::withoutTrashed();
        }
        //query
        $data = $data->join("dia_chis", "dia_chis.id", "hoa_dons.DiaChiId")
            ->where("dia_chis.TaiKhoanId", $request->user()->id) //$request->user()->id
            ->with("CT_HoaDon") //load theo khoa' ngoai cua CTHoaDon, no tu them vao`
            ->with("CT_HoaDon.CT_SanPham");

        if (!empty($request['TrangThai']))
            $data = $data->where("hoa_dons.TrangThai", $request["TrangThai"]);
        //
        $data = $data->get("hoa_dons.*");
        //
        return response()->json($data, 200);
    }
    public function lapHoaDon(Request $request)
    {

        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'DiaChiId' => ['required', 'numeric', 'integer', 'exists:dia_chis,id'],
            "PhuongThucThanhToanId" => ['required', 'numeric', 'integer', 'exists:phuong_thuc_thanh_toans,id'],
            "VoucherId" => ['nullable', 'numeric', 'integer', 'exists:vouchers,id'],

            // "Data.*.SanPhamId" => ['required', 'numeric', 'integer', 'exists:san_phams,id'],
            // "Data.*.SoLuong" => ['required', 'numeric', 'integer', 'min:0'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $diaChi = DiaChi::where("id", $request["DiaChiId"])->where("TaiKhoanId", $request->user()->id)->first();
        //neu' DiaChiId khong ton` tai trong DB va` khong giong' voi' token user
        if (empty($diaChi)) return response()->json(["message" => "DiaChiId wrong with user"], 400);

        //kiem tra neu' user do' co' voucher do' thi` xoa' voucher do' di => da~ su dung voucher do'
        $voucherTK = new Voucher_TaiKhoan(); //bien cuc bo
        if (!empty($request["VoucherId"])) {
            $voucherTK = Voucher_TaiKhoan::where("TaiKhoanId", $request->user()->id)
                ->where("VoucherId", $request["VoucherId"])->first();
            if (empty($voucherTK)) return response()->json(["message" => "User not have this voucher"], 400);
            //else
            $voucherTK->delete();
            $voucher = $voucherTK->Voucher;
            //neu' voucher da su dung < tong? so' luong voucher cho phep'
            if ($voucher->SLDaSuDung < $voucher->SoLuong) {
                //cong so' luong su dung len 1
                $voucher->SLDaSuDung += 1;
                $voucher->save();
            } else return response()->json(["message" => "The voucher usage limit has been reached, please try again !"], 400);
        }

        //clone ra 1 dia chi moi' de luu lai hoa' don do' giao toi' dau
        $newDiaChi = $diaChi->replicate();
        $newDiaChi->save(); //luu clone vao database
        $newDiaChi->delete(); //xoa' clone do' di cho no' ko co' hien ra

        $hoaDon = HoaDon::create([
            "DiaChiId"         => $newDiaChi->id,
            "PhuongThucThanhToanId" => $request["PhuongThucThanhToanId"],
            "VoucherId" => $request["VoucherId"],
            //da~ co' default nen ko can` set may' cai' sau
            //"TongSoLuong" => 0,
            //"TongTien" => 0,
            //"TrangThai" => 1, //vua lap, dang cho xac nhan
        ]);

        //---------------------------------------------

        //$arrayRaw = json_decode($request->getContent(), true); //chuyen json thanh array de truy van
        $dsGioHang = GioHang::where("TaiKhoanId", $request->user()->id)->get();

        foreach ($dsGioHang as $item) {
            $ctSp = $item->CT_SanPham;

            //neu san pham do' co' so'luong dat hang` lon' hon so luong ton` thi` thoat khoi vong` lap, den spp tiep theo
            if ($item->SoLuong > $ctSp->SoLuongTon)
                continue; //thoat ra khoi vong lap
            else {
                //nguoc lai thi lap hoa don, tru` di so luong ton` trong kho
                $ctSp->SoLuongTon -= $item->SoLuong;
                $ctSp->save();
                $sp = $ctSp->SanPham;
                $sp->LuotMua += 1;
                $sp->save();



                CT_HoaDon::create([
                    'HoaDonId'       => $hoaDon->id,
                    'CTSanPhamId'       => $item->CTSanPhamId,
                    'SoLuong'         => $item->SoLuong,
                    'GiaNhap' => 0, //trigger da~ tinh' toan'
                    'GiaBan' => 0,
                    'ThanhTien' => 0,
                ]);
            }
        }
        //neu ko co chi tiet hoa don nao duoc lap thi xoa' luon cai hoa don
        if (empty(CT_HoaDon::where('HoaDonId', $hoaDon->id)->first())) {
            $hoaDon->forceDelete();
            //restore voucher, hoan` lai so' luong da su dung
            $voucherTK->restore();
            $voucher = $voucherTK->Voucher;
            $voucher->SLDaSuDung -= 1;
            $voucher->save();
            //
            return response()->json(["message" => "Not Success"], 400);
        }
        //nguoc lai thi tinh' tong? tien`, tong? so luong cho hoa' don va` tra? ket qua ve 200
        DB::select('CALL update_TongTien_HoaDon()');

        DB::table('gio_hangs')->where('TaiKhoanId', $request->user()->id)->delete();

        return response()->json(["message" => "Create Success"], 200);
    }
}
