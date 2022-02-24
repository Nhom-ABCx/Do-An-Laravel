<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiSanPham;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loaisanpham::create([
            'id' => 1,
            'TenLoai' => 'Điện lạnh',
            'MoTa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Loaisanpham::create([
            'id' => 2,
            'TenLoai' => 'Điện thoại',
            'MoTa' => 'Smart Phone',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Loaisanpham::create([
            'id' => 3,
            'TenLoai' => 'LapTop',
            'MoTa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Loaisanpham::create([
            'id' => 4,
            'TenLoai' => 'Máy ảnh',
            'MoTa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Loaisanpham::create([
            'id' => 5,
            'TenLoai' => 'Máy tính bảng',
            'MoTa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Loaisanpham::create([
            'id' => 6,
            'TenLoai' => 'Phụ kiện',
            'MoTa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
