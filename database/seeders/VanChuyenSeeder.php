<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\DonViVanChuyen;
use App\Models\NguoiVanChuyen;

class VanChuyenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donvivanchuyen::create([
            'id' => 1,
            'TenDonViVanChuyen' => 'Viettel Post',
            'Website' => 'https://www.viettelpost.com.vn/',
            'Email' => 'viettelpost@gmail.com',
            'Phone' => '84462660306',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 2,
            'TenDonViVanChuyen' => 'Vietnam Post',
            'Website' => 'https://www.ems.com.vn/',
            'Email' => 'Vietnampost@gmail.com',
            'Phone' => '84435371552',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 3,
            'TenDonViVanChuyen' => 'Giao Hàng Nhanh',
            'Website' => 'https://giaohangnhanh.vn/',
            'Email' => 'giaohangnhanh@gmail.com',
            'Phone' => '18001201',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 4,
            'TenDonViVanChuyen' => 'Giao Hàng Tiết Kiệm',
            'Website' => 'https://giaohangtietkiem.vn/',
            'Email' => 'giaohangtietkiem@gmail.com',
            'Phone' => '19006092',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 5,
            'TenDonViVanChuyen' => 'Kerry Express',
            'Website' => 'https://kerryexpress.com.vn/',
            'Email' => 'kerryexpress@gmail.com',
            'Phone' => '19006663',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 6,
            'TenDonViVanChuyen' => 'SShip',
            'Website' => 'https://sship.vn/',
            'Email' => 'sship@gmail.com',
            'Phone' => '1900969684',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Donvivanchuyen::create([
            'id' => 7,
            'TenDonViVanChuyen' => 'Shipchung',
            'Website' => 'https://www.shipchung.vn/',
            'Email' => 'shipchung@gmail.com',
            'Phone' => '1900636030',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Nguoivanchuyen::create([
            'id' => 1,
            'HoTen' => 'Nguyễn Huy Tự',
            'NgaySinh' => '1979-12-03 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => NULL,
            'HinhAnh' => 'image-5.jpg',
            'Phone' => '0484658492',
            'DonViVanChuyenId' => 1,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 2,
            'HoTen' => 'Cô Bắc',
            'NgaySinh' => '1981-04-07 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => NULL,
            'HinhAnh' => 'image-6.jpg',
            'Phone' => '0927281266',
            'DonViVanChuyenId' => 2,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 3,
            'HoTen' => 'Mạc Thị Bưởi',
            'NgaySinh' => '1998-07-05 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => NULL,
            'HinhAnh' => 'thumb-1.jpg',
            'Phone' => '0325167511',
            'DonViVanChuyenId' => 3,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 4,
            'HoTen' => 'Lê Công Kiều',
            'NgaySinh' => '2001-11-09 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => NULL,
            'HinhAnh' => 'thumb-2.jpg',
            'Phone' => '0204082858',
            'DonViVanChuyenId' => 4,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 5,
            'HoTen' => 'Hồ Hảo Hớn',
            'NgaySinh' => '1985-12-02 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => NULL,
            'HinhAnh' => 'thumb-3.jpg',
            'Phone' => '0506788273',
            'DonViVanChuyenId' => 5,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 6,
            'HoTen' => 'Trần Phi Long',
            'NgaySinh' => '1997-06-12 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => NULL,
            'HinhAnh' => 'thumb-4.jpg',
            'Phone' => '0506781231',
            'DonViVanChuyenId' => 6,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nguoivanchuyen::create([
            'id' => 7,
            'HoTen' => 'Dương Tấn Tài',
            'NgaySinh' => '1989-08-29 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => NULL,
            'HinhAnh' => 'thumb-5.jpg',
            'Phone' => '0298123123',
            'DonViVanChuyenId' => 7,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
