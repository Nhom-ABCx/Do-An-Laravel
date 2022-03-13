<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class LoaiTaiKhoan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'loai_tai_khoans';
    protected $fillable = [
        'TenLoai',
        'MoTa',
    ];

    public function TaiKhoan()
    {
        return $this->hasMany(TaiKhoan::class, 'LoaiTaiKhoanId');
    }
    public function LoaiTaiKhoan_Quyen()
    {
        return $this->hasMany(LoaiTaiKhoan_Quyen::class, 'LoaiTaiKhoanId');
    }
}
