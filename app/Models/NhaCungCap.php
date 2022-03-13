<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class NhaCungCap extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = "nha_cung_caps";
    protected $fillable = [
        'TenNhaCungCap',
        'DiaChi',
        'Email',
        'Phone',
    ];
    public function HoaDonNhap()
    {
        return $this->hasMany(HoaDonNhap::class, 'NhaCungCapId');
    }
}
