<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NhanVien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'nhan_viens';
    protected $fillable = [
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
    public function Message()
    {
        return $this->hasMany(Message::class, 'KhachHangId');
    }
}
