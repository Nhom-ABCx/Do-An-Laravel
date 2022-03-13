<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class HinhAnh extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hinh_anhs';
    protected $fillable = [
        'CTSanPhamId',
        'HinhAnh',
    ];
    public function CT_SanPham()
    {
        return $this->belongsTo(CT_SanPham::class, 'CTSanPhamId');
    }
}
