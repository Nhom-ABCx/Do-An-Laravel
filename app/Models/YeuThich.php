<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YeuThich extends Model
{
    use HasFactory;

    protected $table = 'yeu_thichs';
    protected $fillable = [
        'TaiKhoanId',
        'CTSanPhamId',
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
