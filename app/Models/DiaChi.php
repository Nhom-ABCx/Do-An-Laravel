<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class DiaChi extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'dia_chis';
    protected $fillable = [
        'TaiKhoanId',
        'TenNguoiNhan',
        'Phone',
        'DiaChiChiTiet',
        'PhuongXa',
        'QuanHuyen',
        'TinhThanhPho',
        'CodePhuongXa',
        'CodeQuanHuyen',
        'CodeTinhThanhPho',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function HoaDon()
    {
        return $this->hasMany(HoaDon::class, 'DiaChiId');
    }
}
