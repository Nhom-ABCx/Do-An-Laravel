<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class Voucher_TaiKhoan extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = 'voucher_tai_khoans';
    protected $fillable = [
        'TaiKhoanId',
        'VoucherId',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function Voucher()
    {
        return $this->belongsTo(Voucher::class, 'VoucherId');
    }
}
