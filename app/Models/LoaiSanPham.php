<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class LoaiSanPham extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    protected $table = 'loai_san_phams';
    protected $fillable = [
        'TenLoai',
        'MoTa',
    ];
    public function SanPham()
    {
        return $this->hasMany(SanPham::class,'LoaiSanPhamId');
    }
}