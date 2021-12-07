<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class SanPham extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'san_phams';
    protected $fillable = [
          'TenSanPham',
          'MoTa',
          'SoLuongTon',
          'DonGia',
          'HinhAnh',
          'LuotMua',
          'HangSanXuatId',
          'LoaiSanPhamId',
    ];
    public function HangSanXuat()
    {
        return $this->belongsTo(HangSanXuat::class,'HangSanXuatId');
    }
    public function LoaiSanPham()
    {
        return $this->belongsTo(LoaiSanPham::class,'LoaiSanPhamId');
    }
}
