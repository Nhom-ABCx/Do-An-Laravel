<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class LichSuTimKiem extends Model
{
    use  HasFactory, SoftDeletes;

    protected $table = 'lich_su_tim_kiems';
    protected $fillable = [
        'TaiKhoanId',
        'TimKiem',
    ];
    public function TaiKhoan()
    {
        return $this->belongsTo(TaiKhoan::class, 'TaiKhoanId')->withTrashed();
    }
}
