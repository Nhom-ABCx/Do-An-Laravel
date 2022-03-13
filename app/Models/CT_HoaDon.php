<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CT_HoaDon extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'ct_hoa_dons';
    // protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = [
        'HoaDonId',
        'CTSanPhamId',
        'SoLuong',
        'GiaNhap',
        'GiaBan',
        'ThanhTien',
        'Star',
    ];
    public function HoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'HoaDonId');
    }
    public function CT_SanPham()
    {
        return $this->belongsTo(CT_SanPham::class, 'CTSanPhamId')->withTrashed();
    }
}
