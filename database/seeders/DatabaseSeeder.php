<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BinhLuan;
use App\Models\HangSanXuat;
use App\Models\ChuongTrinhKhuyenMai;
use App\Models\DiaChi;
use App\Models\CT_HoaDon;
use App\Models\CTChuongTrinhKM;
use App\Models\DonViVanChuyen;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\LoaiSanPham;
use App\Models\NguoiVanChuyen;
use App\Models\NhanVien;
use App\Models\SanPham;
use App\Models\GioHang;
use App\Models\YeuThich;
use App\Models\Message;
use App\Models\Conversation;

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
        // $this->call([
        //     LoaiSanPhamSeeder::class,
        //     SanPhamSeeder::class,
        // ]);        // $sql = file_get_contents(database_path() . '/Do_An_Laravel_Insert_values.sql');
        // DB::statement($sql);
        //https://laravel.stonelab.ch/sql-seeder-converter/

    }
}
