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
        'Id',
        'NhanVienId',
        'KhachHangId',
        'DiaChiGiao',
        'TrangThai',
        'TongTien',
    ];
    public function NhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'NhanVienId');
    }

    public function KhachHang()
    {
        return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function CT_HoaDon()
    {
        return $this->hasMany(CT_HoaDon::class, 'HoaDonId');
    }
}
