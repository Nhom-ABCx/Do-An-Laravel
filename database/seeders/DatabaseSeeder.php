<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //goi class seeder de add seed, cai nay dat viet tat' nen bo seed vo day luon
        $this->call([
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            HangSanXuatSeeder::class,
            LoaiSanPhamSeeder::class,
            SanPhamSeeder::class,
            ChuongTrinhKhuyenMaiSeeder::class,
            VanChuyenSeeder::class,
            DiaChiSeeder::class,
            HoaDonSeeder::class,
            CT_HoaDonSeeder::class,
            GioHangSeeder::class,
            YeuThichSeeder::class,
            BinhLuanSeeder::class,
            LichSuVanChuyenSeeder::class,
            ConverstationSeeder::class,
            MessageSeeder::class,

        ]);        // $sql = file_get_contents(database_path() . '/Do_An_Laravel_Insert_values.sql');
        // DB::statement($sql);
        //https://laravel.stonelab.ch/sql-seeder-converter/
    }
}
