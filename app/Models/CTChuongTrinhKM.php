<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class CTChuongTrinhKM extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete

    protected $table = "ct_chuong_trinh_kms";
    protected $fillable = [
        'ChuongTrinhKhuyenMaiId',
        'CTSanPhamId',
        'GiamGia',
        'SoLuong',
        'SLDaSuDung',
    ];

    public function ChuongTrinhKhuyenMai()
    {
        return $this->belongsTo(ChuongTrinhKhuyenMai::class, 'ChuongTrinhKhuyenMaiId');
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'CTSanPhamId');
    }
}
