<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete


class DonViVanChuyen extends Model
{
    use HasFactory;
    use SoftDeletes; //su dung chuc nang softdelete

    protected $table = 'don_vi_van_chuyens';
    protected $fillable = [
          'Id',
          'TenDonViVanChuyen',
          'Website',
          'Email',
          'Phone',
    ];
}
