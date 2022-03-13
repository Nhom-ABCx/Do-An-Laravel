<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class LoaiTaiKhoan_Quyen extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'loai_tai_khoan_quyens';
    protected $fillable = [
        'LoaiTaiKhoanId',
        'QuyenId',
        'MoTa',
    ];

    public function LoaiTaiKhoan()
    {
        return $this->belongsTo(LoaiTaiKhoan::class, 'LoaiTaiKhoanId')->withTrashed();
    }
    public function Quyen()
    {
        return $this->belongsTo(Quyen::class, 'QuyenId')->withTrashed();
    }
}
