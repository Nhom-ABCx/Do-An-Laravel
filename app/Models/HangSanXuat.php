<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class HangSanXuat extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    protected $table ="hang_san_xuats";
    protected $fillable=[
        'Id',
        'Ten',
        'DiaChi',
        'Email',
        'Phone'
    ];
    public function SanPham()
    {
        return $this->hasMany(SanPham::class,'HangSanXuatId');
    }
}
