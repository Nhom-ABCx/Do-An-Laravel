<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LichSuVanChuyen extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'lich_su_van_chuyens';
    protected $fillable = [
        'HoaDonId',
        "NguoiVanChuyenId",
        'TrangThai',
    ];

    public function HoaDon()
    {
        return $this->belongsTo(HoaDon::class, 'HoaDonId');
    }
    public function NguoiVanChuyen()
    {
        return $this->belongsTo(NguoiVanChuyen::class, 'NguoiVanChuyenId');
    }
}
