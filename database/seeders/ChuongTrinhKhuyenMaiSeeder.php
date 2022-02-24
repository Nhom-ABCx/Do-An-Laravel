<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChuongTrinhKhuyenMai;
use App\Models\CTChuongTrinhKM;


class ChuongTrinhKhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chuongtrinhkhuyenmai::create([
            'id' => 1,
            'TenChuongTrinh' => 'Khuyến mãi cực hot ngày 20/11',
            'MoTa' => ' giảm giá đến 5000đ các loại phụ kiện',
            'FromDate' => '2021-11-20 00:00:00',
            'ToDate' => '2022-12-01 00:00:00',
            'created_at' => '2021-10-18 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CTChuongTrinhKM::create([
            'id' => 1,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 28,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 2,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 29,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 3,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 30,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 4,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 31,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 5,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 32,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 8,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 23,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 9,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 24,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 10,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 25,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 11,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 26,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'id' => 12,
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 27,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
