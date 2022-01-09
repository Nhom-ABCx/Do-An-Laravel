<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BinhLuan;
use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CT_HoaDon;
use App\Models\CTChuongTrinhKM;
use App\Models\DonViVanChuyen;
use App\Models\HoaDon;
use App\Models\KhachHang;
use App\Models\LoaiSanPham;
use App\Models\LoaiTaiKhoan_Quyen;
use App\Models\LoaiTaiKhoan;
use App\Models\NguoiVanChuyen;
use App\Models\NhaCungCap;
use App\Models\NhanVien;
use App\Models\Quyen;
use App\Models\SanPham;
use App\Models\TaiKhoan;
use App\Models\TrangThaiHD;

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
        // ]);

        //Seeding Start
        //insert Quyens vi du
        // $quyen = new Quyen();
        // $quyen->fill([
        //     'TenQuyen' => "DangNhap",
        //     'MoTa' => 'Đăng Nhập',
        // ]);
        // $quyen->save();


        // $sql = file_get_contents(database_path() . '/Do_An_Laravel_Insert_values.sql');
        // DB::statement($sql);
    }
}
