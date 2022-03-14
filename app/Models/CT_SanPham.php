<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class CT_SanPham extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'ct_san_phams';
    protected $fillable = [
        'SanPhamId',
        'MaSanPham',
        'SoLuong',
        'GiaNhap',
        'GiaBan',
        'ThuocTinhValue',
    ];
    public function lstThuocTinhValue()
    {
        return json_decode($this->ThuocTinhValue);
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class, "CTSanPhamId");
    }
    public function CT_HoaDon()
    {
        return $this->hasMany(CT_HoaDon::class, "CTSanPhamId");
    }
    public function YeuThich()
    {
        return $this->hasMany(YeuThich::class, "CTSanPhamId");
    }
    public function GioHang()
    {
        return $this->hasMany(GioHang::class, 'CTSanPhamId');
    }
    public function CT_HoaDonNhap()
    {
        return $this->hasMany(CT_HoaDonNhap::class, 'CTSanPhamId');
    }
}
