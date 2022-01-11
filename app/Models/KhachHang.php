<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete
use Laravel\Passport\HasApiTokens;

class KhachHang extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    use HasApiTokens;
    protected $table = 'khach_hangs';
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

    public function YeuThich()
    {
        return $this->hasMany(YeuThich::class, 'KhachHangId');
    }

    public function BinhLuan()
    {
        return $this->hasMany(BinhLuan::class, 'KhachHangId');
    }

    public function DiaChiGiao()
    {
        return $this->hasMany(DiaChi::class, 'KhachHangId');
    }
    public function Message()
    {
        return $this->hasMany(Message::class, 'KhachHangId');
    }
}
