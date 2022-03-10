<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class CT_SanPham extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'ct_san_phams';
    protected $fillable = [
        'SanPhamId',
        'MaSanPham',
        'ThuocTinhValue',
        'GiaBan',
    ];
    public function lstThuocTinhValue()
    {
        return json_decode($this->ThuocTinhValue);
    }
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class, 'SanPhamId');
    }
}
