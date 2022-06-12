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
        //kt neu du lieu ko rong~ thi tra ve`
        if ($data->isNotEmpty())
            return response()->json($data, 200);
        //nguoc lai tra ve mang? rong~
        return response()->json([], 404);
    }
}
