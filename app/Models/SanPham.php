<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //them vao de khai bao' thu vien soft delete
use Illuminate\Support\Arr;

class SanPham extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'san_phams';
    protected $fillable = [
        'HangSanXuatId',
        'LoaiSanPhamId',
        'TenSanPham',
        'ThuocTinh',
        'MoTa',
        'LuotMua',
        'ThuocTinhToHop',
        'TrangThai',
    ];
    protected $casts = [
        'ThuocTinh' => 'array',
        'ThuocTinhToHop' => 'array',
    ];
    public function lstThuocTinh()
    {
        $lstThuocTinh = collect([]);
        collect($this->ThuocTinhToHop)->each(function ($item, $key) use ($lstThuocTinh) {
            $array = collect([]);
            foreach ($this->CT_SanPham as $ct) {
                $array[] = $ct->ThuocTinhValue[$key];
            }
            $lstThuocTinh = Arr::add($lstThuocTinh, $key, $array->unique()->values()->all());
        });
        return $lstThuocTinh;
    }
    public function tongSoLuongTon()
    {
        return CT_SanPham::where('SanPhamId', $this->id)->sum('SoLuongTon');
    }
    //relations
    public function HangSanXuat()
    {
        return $this->belongsTo(HangSanXuat::class, 'HangSanXuatId')->withTrashed();
    }
    public function LoaiSanPham()
    {
        return $this->belongsTo(LoaiSanPham::class, 'LoaiSanPhamId')->withTrashed();
    }
    public function HinhAnh()
    {
        return $this->hasMany(HinhAnh::class, 'SanPhamId');
    }
    public function CT_SanPham()
    {
        return $this->hasMany(CT_SanPham::class, 'SanPhamId');
    }
}
