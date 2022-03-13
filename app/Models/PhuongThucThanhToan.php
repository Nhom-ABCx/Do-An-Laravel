<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class PhuongThucThanhToan extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = 'phuong_thuc_thanh_toans';
    protected $fillable = [
        'TenPhuongThuc',
        'TenTaiKhoan',
        'SoTaiKhoan',
    ];
    public function HoaDon()
    {
        return $this->hasMany(HoaDon::class, 'PhuongThucThanhToanId');
    }
}
