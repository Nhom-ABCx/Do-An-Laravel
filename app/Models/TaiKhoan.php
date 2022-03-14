<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class TaiKhoan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'tai_khoans';
    protected $fillable = [
        'LoaiTaiKhoanId',
        'Username',
        'Email',
        'Phone',
        'MatKhau',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'HinhAnh',
    ];

    protected $hidden = [
        'MatKhau',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->MatKhau;
    }

    //khoa ngoai

    public function LoaiTaiKhoan()
    {
        return $this->belongsTo(LoaiTaiKhoan::class, 'LoaiTaiKhoanId');
    }
    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class, "TaiKhoanId");
    }
    public function DiaChi()
    {
        return $this->hasMany(DiaChi::class, 'TaiKhoanId');
    }
    public function Voucher_TaiKhoan()
    {
        return $this->hasMany(Voucher_TaiKhoan::class, 'TaiKhoanId');
    }
    public function YeuThich()
    {
        return $this->hasMany(YeuThich::class, 'TaiKhoanId');
    }
    public function GioHang()
    {
        return $this->hasMany(GioHang::class, 'TaiKhoanId');
    }
    public function HoaDonNhap()
    {
        return $this->hasMany(HoaDonNhap::class, 'TaiKhoanId');
    }
    public function LichSuTimKiem()
    {
        return $this->hasMany(LichSuTimKiem::class, 'TaiKhoanId');
    }
    public function LichSuHoatDong()
    {
        return $this->hasMany(LichSuHoatDong::class, 'TaiKhoanId');
    }
    public function SocialLogin()
    {
        return $this->hasMany(SocialLogin::class, 'TaiKhoanId');
    }
}
