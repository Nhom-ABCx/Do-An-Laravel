<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BinhLuan;

class BinhLuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Binhluan::create([
            'id' => 1,
            'NoiDung' => 'Sản phẩm rất tốt triệu like',
            'KhachHangId' => 1,
            'SanPhamId' => 30,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Binhluan::create([
            'id' => 2,
            'NoiDung' => 'Sản phẩm tốt',
            'KhachHangId' => 1,
            'SanPhamId' => 28,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Binhluan::create([
            'id' => 3,
            'NoiDung' => 'giao hang nhanh, sản phẩm tốt',
            'KhachHangId' => 2,
            'SanPhamId' => 29,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Binhluan::create([
            'id' => 4,
            'NoiDung' => 'hoàn hảo',
            'KhachHangId' => 1,
            'SanPhamId' => 32,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
