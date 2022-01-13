<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class DiaChi extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

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
