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
    ];
    public function lstThuocTinh()
    {
        $lstThuocTinh = collect([]);
        $this->decodeThuocTinhToHop()->each(function ($item, $key) use ($lstThuocTinh) {
            $array = collect([]);
            foreach ($this->CT_SanPham as $ct) {
                $array[] = $ct->decodeThuocTinhValue()[$key];
            }
            $lstThuocTinh = Arr::add($lstThuocTinh, $key, $array->unique()->values()->all());
        });
        return $lstThuocTinh;
    }
    public function decodeThuocTinh()
    {
        return collect(json_decode($this->ThuocTinh, true));
    }
    public function decodeThuocTinhToHop()
    {
        return collect(json_decode($this->ThuocTinhToHop, true));
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
    public function CTChuongTrinhKM()
    {
        return $this->hasMany(CTChuongTrinhKM::class, 'CTSanPhamId');
    }
}
