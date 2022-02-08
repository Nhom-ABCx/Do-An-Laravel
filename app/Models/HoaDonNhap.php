<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDonNhap extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'hoa_don_nhaps';
    protected $fillable = [
        'NhanVienId', //nhập bởi ai
        'NhaCungCap', // ai là người cung cấp (do ko có bảng nhà cung cấp nên ghi chuỗi)
        'Phone',
        'TongSoLuong',
        'TongTien',
        'TrangThai',
    ];
    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'NhanVienId');
    }
    public function CT_HoaDonNhap()
    {
        return $this->hasMany(CT_HoaDonNhap::class, 'HoaDonNhapId');
    }
}
