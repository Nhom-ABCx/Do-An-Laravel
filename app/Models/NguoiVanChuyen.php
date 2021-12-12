<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete

class NguoiVanChuyen extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete
    protected $table='nguoi_van_chuyens';
    protected $fillable=[
        'Id',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'HinhAnh',
        'Phone',
        'DonViVanChuyenId'
    ];
    public function DonViVanChuyen(){
        return $this->belongsTo(DonViVanChuyen::class,'DonViVanChuyenId');
    }
}
