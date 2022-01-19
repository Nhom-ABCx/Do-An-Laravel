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
        'SanPhamId', //nhập sản phẩm nào
        'HoaDonNhapId', //được nhập từ hóa đơn nào
        'SoLuong',
        'GiaNhap', //giá nhập vào bao nhiêu
        'ThanhTien',
    ];
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
    public function HoaDonNhap()
    {
        return $this->belongsTo(HoaDonNhap::class, 'HoaDonNhapId');
    }
}
