<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class Quyen extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'quyens';
    protected $fillable = [
        'Code',
        'TenQuyen',
        'parent_id',
    ];
    public function LoaiTaiKhoan_Quyen()
    {
        return $this->hasMany(LoaiTaiKhoan_Quyen::class, 'QuyenId');
    }
    public function LichSuHoatDong()
    {
        return $this->hasMany(LichSuHoatDong::class, 'QuyenId');
    }
}
