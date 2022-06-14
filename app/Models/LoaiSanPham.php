<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete
use Kalnoy\Nestedset\NodeTrait; //https://github.com/lazychaser/laravel-nestedset

class LoaiSanPham extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    use NodeTrait; //de xai` parent_id

    protected $table = 'loai_san_phams';
    protected $fillable = [
        'Code',
        'TenLoai',
        'MoTa',
        'Icon',
        'parent_id',
    ];
    public function SanPham()
    {
        return $this->hasMany(SanPham::class, 'LoaiSanPhamId');
    }
}
