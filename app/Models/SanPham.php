<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class SanPham extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'san_phams';
    protected $fillable = [
        'Id',
        'TenSanPham',
        'MoTa',
        'SoLuongTon',
        'GiaNhap',
        'GiaBan',
        'HinhAnh',
        'LuotMua',
        'HangSanXuatId',
        'LoaiSanPhamId',
    ];
    public function HangSanXuat()
    {
        return $this->belongsTo(HangSanXuat::class, 'HangSanXuatId')->withTrashed();
    }
    public function LoaiSanPham()
    {
        return $this->belongsTo(LoaiSanPham::class, 'LoaiSanPhamId')->withTrashed();
    }
    public function CTChuongTrinhKM()
    {
        return $this->hasMany(CTChuongTrinhKM::class, 'SanPhamId');
    }
    public function CT_HoaDon()
    {
        return $this->hasMany(CT_HoaDon::class, 'SanPhamId');
    }
    public function YeuThich()
    {
        return $this->hasMany(YeuThich::class, 'SanPhamId');
    }
    public function GioHang()
    {
        return $this->hasMany(GioHang::class, 'SanPhamId');
    }
    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class, 'SanPhamId');
    }
    public function CT_HoaDonNhap()
    {
        return $this->hasMany(CT_HoaDonNhap::class, 'SanPhamId');
    }
}
