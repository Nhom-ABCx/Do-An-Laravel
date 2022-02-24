<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SanPham;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sanpham::create([
            'id' => 1,
            'TenSanPham' => 'Xiaomi Redmi Note 6 Pro30',
            'MoTa' => '64GB',
            'SoLuongTon' => 10,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'HinhAnh' => 'DT_1.jpg',
            'LuotMua' => 12,
            'HangSanXuatId' => 2,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 2,
            'TenSanPham' => 'Máy giặt Electrolux 10 Kg29',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'HinhAnh' => 'DL_1.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 8,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 3,
            'TenSanPham' => 'Máy giặt Beko 9Kg28',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 8,
            'GiaNhap' => 15000000,
            'GiaBan' => 16000000,
            'HinhAnh' => 'DL_2.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 8,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 4,
            'TenSanPham' => 'Samsung Inverter 1227',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 46,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'HinhAnh' => 'DT_2.jpg',
            'LuotMua' => 9,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 5,
            'TenSanPham' => 'Máy giặt Toshiba 9.5 Kg26',
            'MoTa' => '32Gb',
            'SoLuongTon' => 10,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'HinhAnh' => 'DL_3.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 10,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 6,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a125',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 39,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'HinhAnh' => 'DT_3.jpg',
            'LuotMua' => 0,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 7,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a224',
            'MoTa' => '16Gb',
            'SoLuongTon' => 5,
            'GiaNhap' => 15000000,
            'GiaBan' => 16000000,
            'HinhAnh' => 'DT_4.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 8,
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus23',
            'MoTa' => '32Gb',
            'SoLuongTon' => 6,
            'GiaNhap' => 11000000,
            'GiaBan' => 12000000,
            'HinhAnh' => 'DT_5.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 9,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a122',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 17,
            'GiaNhap' => 11000000,
            'GiaBan' => 12000000,
            'HinhAnh' => 'DT_6.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 10,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a221',
            'MoTa' => '16Gb',
            'SoLuongTon' => 33,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'HinhAnh' => 'DT_7.jpg',
            'LuotMua' => 8,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 11,
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus20',
            'MoTa' => '32Gb',
            'SoLuongTon' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'HinhAnh' => 'DT_8.jpg',
            'LuotMua' => 90,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 12,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a119',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 24,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'HinhAnh' => 'DT_9.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 13,
            'TenSanPham' => 'Điện thoại xiaomi-mi-a218',
            'MoTa' => '16Gb',
            'SoLuongTon' => 48,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'HinhAnh' => 'DT_10.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 14,
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus17',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 19,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'HinhAnh' => 'DT_11.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 15,
            'TenSanPham' => 'samsung-galaxy-tab-e-9616',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 25,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'HinhAnh' => 'DT_12.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 16,
            'TenSanPham' => 'samsung-galaxy-tab-e-9615',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 23,
            'GiaNhap' => 13000000,
            'GiaBan' => 14000000,
            'HinhAnh' => 'DT_13.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 17,
            'TenSanPham' => 'samsung-galaxy-tab-e-9614',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 39,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'HinhAnh' => 'DT_14.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 18,
            'TenSanPham' => 'Điện thoại vivo-y85-red13',
            'MoTa' => 'I3',
            'SoLuongTon' => 43,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'HinhAnh' => 'DT_15.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 7,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 19,
            'TenSanPham' => 'LapTop acer-aspire-a31412',
            'MoTa' => 'I7',
            'SoLuongTon' => 28,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'HinhAnh' => 'LT_1.jpg',
            'LuotMua' => 9,
            'HangSanXuatId' => 11,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 20,
            'TenSanPham' => 'LapTop acer-aspire-a71511',
            'MoTa' => 'I5',
            'SoLuongTon' => 22,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'HinhAnh' => 'LT_2.jpg',
            'LuotMua' => 10,
            'HangSanXuatId' => 11,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 21,
            'TenSanPham' => 'LapTop asus-s510ua-i50',
            'MoTa' => 'I3',
            'SoLuongTon' => 30,
            'GiaNhap' => 11000000,
            'GiaBan' => 12000000,
            'HinhAnh' => 'LT_3.jpg',
            'LuotMua' => 15,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 22,
            'TenSanPham' => 'LapTop asus-x44lua-i39',
            'MoTa' => 'Full box',
            'SoLuongTon' => 14,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'HinhAnh' => 'LT_4.jpg',
            'LuotMua' => 17,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 23,
            'TenSanPham' => 'Máy ảnh Cannon EOS 6D8',
            'MoTa' => 'Full box',
            'SoLuongTon' => 5,
            'GiaNhap' => 13000000,
            'GiaBan' => 14000000,
            'HinhAnh' => 'Camera_1.jpg',
            'LuotMua' => 12,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 24,
            'TenSanPham' => 'Máy ảnh Canon Ixus 1857',
            'MoTa' => 'Full box',
            'SoLuongTon' => 3,
            'GiaNhap' => 15000000,
            'GiaBan' => 16000000,
            'HinhAnh' => 'Camera_2.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 25,
            'TenSanPham' => 'Máy ảnh Canon EOS M506',
            'MoTa' => 'Full box',
            'SoLuongTon' => 19,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'HinhAnh' => 'Camera_3.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 26,
            'TenSanPham' => 'Máy ảnh Canon Ixus 2855',
            'MoTa' => 'Full box',
            'SoLuongTon' => 37,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'HinhAnh' => 'Camera_1.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 27,
            'TenSanPham' => 'Máy ảnh Canon Powershot4 ',
            'MoTa' => 'Test',
            'SoLuongTon' => 41,
            'GiaNhap' => 13000000,
            'GiaBan' => 14000000,
            'HinhAnh' => 'Camera_2.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 28,
            'TenSanPham' => 'cap-lightning-2m-evalu3',
            'MoTa' => 'Test',
            'SoLuongTon' => 47,
            'GiaNhap' => 70000,
            'GiaBan' => 80000,
            'HinhAnh' => 'SP_1.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 29,
            'TenSanPham' => 'cap-lightning-20cm-esaver2',
            'MoTa' => 'Test',
            'SoLuongTon' => 30,
            'GiaNhap' => 30000,
            'GiaBan' => 40000,
            'HinhAnh' => 'SP_2.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 30,
            'TenSanPham' => 'cap-micro-1m-esaver1',
            'MoTa' => 'Test',
            'SoLuongTon' => 44,
            'GiaNhap' => 50000,
            'GiaBan' => 60000,
            'HinhAnh' => 'SP_3.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 31,
            'TenSanPham' => 'cap-micro-usb-20cm1',
            'MoTa' => 'Test',
            'SoLuongTon' => 32,
            'GiaNhap' => 140000,
            'GiaBan' => 150000,
            'HinhAnh' => 'SP_4.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Sanpham::create([
            'id' => 32,
            'TenSanPham' => 'tai-nghe-chup-tai-kanen1',
            'MoTa' => '',
            'SoLuongTon' => 27,
            'GiaNhap' => 130000,
            'GiaBan' => 140000,
            'HinhAnh' => 'SP_5.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
