<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YeuThich extends Model
{
    use HasFactory;

    protected $table = 'yeu_thichs';
    //protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = [
        'KhachHangId',
        'SanPhamId',
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
