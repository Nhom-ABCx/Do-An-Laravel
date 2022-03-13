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
    protected $fillable = [
        'TaiKhoanId',
        'CTSanPhamId',
        'NoiDung',
        'Parent_Id',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId');
    }
    public function CT_SanPham()
    {
        return $this->belongsTo(CT_SanPham::class, 'CTSanPhamId');
    }
}
