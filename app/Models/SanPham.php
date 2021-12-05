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
          'NhaCungCapId',
          'LoaiSanPhamId',
    ];
    public function NhaCungCap()
    {
        return $this->belongsTo(NhaCungCap::class,'NhaCungCapId');
    }
    public function LoaiSanPham()
    {
        return $this->belongsTo(LoaiSanPham::class,'LoaiSanPhamId');
    }
}
