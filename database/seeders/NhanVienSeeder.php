<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NhanVien;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nhanvien::create([
            'id' => 1,
            'Username' => 'Admin',
            'Email' => 'Admin@gmail.com',
            'Phone' => '0779597983',
            'MatKhau' => 'Admin',
            'HoTen' => 'Administrator',
            'NgaySinh' => '2007-02-14 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => 'TP HCM',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/1/image-1.jpg',
            'remember_token' => NULL,
            'created_at' => '1991-11-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nhanvien::create([
            'id' => 2,
            'Username' => 'NhanVien01',
            'Email' => 'NhanVien01@gmail.com',
            'Phone' => '0238506390',
            'MatKhau' => 'password123',
            'HoTen' => 'Bà Huyện Thanh Quan',
            'NgaySinh' => '1997-04-14 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'O7, Cao Bá Nhạ, Hậu Giang',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/2/image-2.jpg',
            'remember_token' => NULL,
            'created_at' => '1991-11-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nhanvien::create([
            'id' => 3,
            'Username' => 'NhanVien02',
            'Email' => 'NhanVien02@gmail.com',
            'Phone' => '0176440449',
            'MatKhau' => 'password123',
            'HoTen' => 'Nguyễn Hữu Cảnh',
            'NgaySinh' => '2002-11-12 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'P7, Đồng Khởi, Lào Cai',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/3/image-3.jpg',
            'remember_token' => NULL,
            'created_at' => '1991-11-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Nhanvien::create([
            'id' => 4,
            'Username' => 'NhanVien03',
            'Email' => 'NhanVien03@gmail.com',
            'Phone' => '0300345555',
            'MatKhau' => 'password123',
            'HoTen' => 'Alexandre de Rhodes',
            'NgaySinh' => '2020-08-03 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'B0, Lê Lai, Thái Bình',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/4/image-4.jpg',
            'remember_token' => NULL,
            'created_at' => '1991-11-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
