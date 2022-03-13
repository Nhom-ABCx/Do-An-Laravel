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
        'TaiKhoanId',
        'NhaCungCapId',
        'TongSoLuong',
        'TongTien',
        'TrangThai',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class, 'NhaCungCapId');
    }
    public function CT_HoaDonNhap()
    {
        return $this->hasMany(CT_HoaDonNhap::class, 'HoaDonNhapId');
    }
}
