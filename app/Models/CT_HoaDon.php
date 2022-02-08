<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CT_HoaDon extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'ct_hoa_dons';
    // protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = [
        'HoaDonId',
        'SanPhamId',
        'SoLuong',
        'GiaNhap',
        'GiaBan',
        'GiaGiam',
        'ThanhTien',
        'Star',
    ];
    public function HoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'HoaDonId');
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId')->withTrashed();
    }
}
