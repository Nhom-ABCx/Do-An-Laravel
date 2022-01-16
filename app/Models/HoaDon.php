<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDon extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'hoa_dons';
    protected $fillable = [
        'DiaChiId',
        "PhuongThucThanhToan",
        "TongSoLuong",
        'TongTien',
        'TrangThai',
    ];
    public function DiaChi()
    {
        return $this->belongsTo(DiaChi::class, 'DiaChiId');
    }
    public function CT_HoaDon()
    {
        return $this->hasMany(CT_HoaDon::class, 'HoaDonId');
    }
}
