<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class SocialLogin extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = "social_logins";
    protected $fillable = [
        'TaiKhoanId',
        'LoaiSocial',
        'TenHienThi',
        'HinhAnh',
        'remember_token',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
}
