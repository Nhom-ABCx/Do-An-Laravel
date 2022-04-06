<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public

class HinhAnh extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'hinh_anhs';
    protected $fillable = [
        'SanPhamId',
        'HinhAnh',
    ];
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
}
