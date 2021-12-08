<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class ChuongTrinhKhuyenMai extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    protected $table ="chuong_trinh_khuyen_mais";
    protected $fillable=[
        'Id',
        'TenChuongTrinh',
        'MoTa',
        'FromDate',
        'ToDate'
    ];
}
