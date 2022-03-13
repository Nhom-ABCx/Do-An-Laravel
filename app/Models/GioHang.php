<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table = 'gio_hangs';
    protected $fillable = [
        'TaiKhoanId',
        'CTSanPhamId',
        'SoLuong',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function CT_SanPham()
    {
        return $this->belongsTo(CT_SanPham::class, 'CTSanPhamId');
    }
}
