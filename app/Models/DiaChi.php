<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaChi extends Model
{
    use HasFactory;

    protected $table = 'dia_chis';
    protected $fillable = [
        'KhachHangId',
        'TenNguoiNhan',
        'Phone',
        'TinhThanhPho',
        'QuanHuyen',
        'PhuongXa',
        'DiaChiChiTiet',
        'CodeTinhThanhPho',
        'CodeQuanHuyen',
        'CodePhuongXa',
    ];
    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function HoaDon()
    {
        return $this->hasMany(HoaDon::class, 'DiaChiId');
    }
}
