<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class BinhLuan extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    protected $table = "binh_luans";
    protected $fillable=[
        'Id',
        'NoiDung',
        'KhachHangId',
        'SanPhamId',
    ];
    public function KhachHang(){
         return $this->belongsTo(KhachHang::class, 'KhachHangId');
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
}