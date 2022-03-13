<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class Voucher extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = 'vouchers';
    protected $fillable = [
        'Code',
        'GiamGia',
        'FromDate',
        'ToDate',
        'SoLuong',
        'SLDaSuDung',
    ];
    public function Voucher_TaiKhoan()
    {
        return $this->hasMany(Voucher_TaiKhoan::class, 'VoucherId');
    }
    public function HoaDon()
    {
        return $this->hasMany(HoaDon::class, 'VoucherId');
    }
}
