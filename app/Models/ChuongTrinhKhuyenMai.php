<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class ChuongTrinhKhuyenMai extends Model
{
    use HasFactory, SoftDeletes; //su dung chuc nang softdelete
    protected $table = "chuong_trinh_khuyen_mais";
    protected $fillable = [
        'TenChuongTrinh',
        'MoTa',
        'FromDate',
        'ToDate'
    ];
    public function CTChuongTrinhKM()
    {
        return $this->hasMany(CTChuongTrinhKM::class, 'ChuongTrinhKhuyenMaiId');
    }
}
