<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;
    protected $table = 'gio_hangs';
    //protected $primaryKey = null;
    //public $incrementing = false;
    protected $fillable = [
        'KhachHangId',
        'SanPhamId',
        'SoLuong',
    ];
    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
}
