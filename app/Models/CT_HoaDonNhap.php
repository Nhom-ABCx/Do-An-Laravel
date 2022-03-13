<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class CT_HoaDonNhap extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'ct_hoa_don_nhaps';
    protected $fillable = [
        'HoaDonNhapId', //được nhập từ hóa đơn nào
        'CTSanPhamId', //nhập sản phẩm nào
        'SoLuong',
        'GiaNhap', //giá nhập vào bao nhiêu
        'ThanhTien',
    ];
    public function HoaDonNhap()
    {
        return $this->belongsTo(HoaDonNhap::class, 'HoaDonNhapId');
    }
    public function CT_SanPham()
    {
        return $this->belongsTo(CT_SanPham::class, 'CTSanPhamId')->withTrashed();
    }
}
