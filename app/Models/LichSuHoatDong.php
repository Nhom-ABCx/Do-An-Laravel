<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class LichSuHoatDong extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = "lich_su_hoat_dongs";
    protected $fillable = [
        'TaiKhoanId',
        'QuyenId',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function Quyen()
    {
        return $this->belongsTo(Quyen::class, 'QuyenId');
    }
}
