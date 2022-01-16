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
        NhanVien::create([
            'Username' => 'Admin',
            'Email' => 'Admin@gmail.com',
            'Phone' => '0779597983',
            'MatKhau' => 'Admin',
            'HoTen' => 'Administrator',
            'NgaySinh' => '2007/02/14',
            'GioiTinh' => 1,
            'DiaChi' => 'TP HCM',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/1/image-1.jpg',
            'created_at' => '1991-11-11'
        ]);
        NhanVien::create([
            'Username' => 'NhanVien01',
            'Email' => 'NhanVien01@gmail.com',
            'Phone' => '0238506390',
            'MatKhau' => 'passwordNV01',
            'HoTen' => 'Bà Huyện Thanh Quan',
            'NgaySinh' => '1997/04/14',
            'GioiTinh' => 0,
            'DiaChi' => 'O7, Cao Bá Nhạ, Hậu Giang',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/2/image-2.jpg',
            'created_at' => '1991-11-11'
        ]);
        NhanVien::create([
            'Username' => 'NhanVien02',
            'Email' => 'NhanVien02@gmail.com',
            'Phone' => '0176440449',
            'MatKhau' => 'passwordNV02',
            'HoTen' => 'Nguyễn Hữu Cảnh',
            'NgaySinh' => '2002/11/12',
            'GioiTinh' => 0,
            'DiaChi' => 'P7, Đồng Khởi, Lào Cai',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/3/image-3.jpg',
            'created_at' => '1991-11-11'
        ]);
        NhanVien::create([
            'Username' => 'NhanVien03',
            'Email' => 'NhanVien03@gmail.com',
            'Phone' => '0300345555',
            'MatKhau' => 'passwordNV03',
            'HoTen' => 'Alexandre de Rhodes',
            'NgaySinh' => '2020/08/03',
            'GioiTinh' => 0,
            'DiaChi' => 'B0, Lê Lai, Thái Bình',
            'HinhAnh' => '/storage/assets/images/avatar/NhanVien/4/image-4.jpg',
            'created_at' => '1991-11-11'
        ]);
        KhachHang::create([
            'Username' => 'Khach01',
            'Email' => 'Khach01@gmail.com',
            'Phone' => '0618431768',
            'MatKhau' => 'passwordKH01',
            'HoTen' => 'Hồ Huấn Nghiệp',
            'NgaySinh' => '1990/11/24',
            'GioiTinh' => 0,
            'DiaChi' => 'J5, Nguyễn Hữu Cầu, Thanh Hóa',
            'HinhAnh' => 'image-5.jpg',
            'created_at' => '1991-11-11'
        ]);
        KhachHang::create([
            'Username' => 'Khach02',
            'Email' => 'Khach02@gmail.com',
            'Phone' => '0452803292',
            'MatKhau' => 'passwordKH02',
            'HoTen' => 'Hàm Nghi',
            'NgaySinh' => '1996/10/15',
            'GioiTinh' => 0,
            'DiaChi' => 'D4, Huỳnh Khương Ninh, Tiền Giang',
            'HinhAnh' => 'image-6.jpg',
            'created_at' => '1991-11-11'
        ]);
        KhachHang::create([
            'Username' => 'Khach03',
            'Email' => 'Khach03@gmail.com',
            'Phone' => '0566425150',
            'MatKhau' => 'passwordKH03',
            'HoTen' => 'Hồ Tùng Mậu',
            'NgaySinh' => '1986/04/09',
            'GioiTinh' => 0,
            'DiaChi' => 'P1, Bùi Viện, Hải Phòng',
            'HinhAnh' => 'thumb-1.jpg',
            'created_at' => '1991-11-11'
        ]);
        KhachHang::create([
            'Username' => 'Khach04',
            'Email' => 'Khach04@gmail.com',
            'Phone' => '0982099712',
            'MatKhau' => 'passwordKH04',
            'HoTen' => 'Nguyễn Cư Trinh',
            'NgaySinh' => '1994/08/27',
            'GioiTinh' => 1,
            'DiaChi' => 'W7, Mai Thị Lựu, Trà Vinh',
            'HinhAnh' => 'thumb-2.jpg',
            'created_at' => '1991-11-11'
        ]);
        KhachHang::create([
            'Username' => 'Khach05',
            'Email' => 'Khach05@gmail.com',
            'Phone' => '0333641834',
            'MatKhau' => 'passwordKH05',
            'HoTen' => 'Bùi Viện',
            'NgaySinh' => '1990/09/06',
            'GioiTinh' => 1,
            'DiaChi' => 'D3, Nam Quốc Cang, Bình Định',
            'HinhAnh' => 'thumb-3.jpg',
            'created_at' => '1991-11-11'
        ]);
        HangSanXuat::create([
            'Ten' => 'Cannon',
            'DiaChi' => 'V2, Lê Thị Riêng, Hà Nam',
            'Email' => 'Cannon@gmail.com',
            'Phone' => '0468343337'
        ]);
        HangSanXuat::create([
            'Ten' => 'IPhone',
            'DiaChi' => 'N3, Hoàng Sa, Tây Ninh',
            'Email' => 'IPhone@gmail.com',
            'Phone' => '0868562476'
        ]);
        HangSanXuat::create([
            'Ten' => 'Xiaomi',
            'DiaChi' => 'Z7, Lê Thánh Tôn, Lào Cai',
            'Email' => 'Xiaomi@gmail.com',
            'Phone' => '0727834458'
        ]);
        HangSanXuat::create([
            'Ten' => 'SaNaKy',
            'DiaChi' => 'E4, Lê Anh Xuân, Phú Yên',
            'Email' => 'SaNaKy@gmail.com',
            'Phone' => '0219680334'
        ]);
        HangSanXuat::create([
            'Ten' => 'SONY',
            'DiaChi' => 'V2, Lê Thị Riêng, Hà Nam',
            'Email' => 'SONY@gmail.com',
            'Phone' => '0124108053'
        ]);
        HangSanXuat::create([
            'Ten' => 'SamSung',
            'DiaChi' => 'M8, Nguyễn Cư Trinh, Lai Châu',
            'Email' => 'SamSung@gmail.com',
            'Phone' => '0487862068'
        ]);
        HangSanXuat::create([
            'Ten' => 'ViVo',
            'DiaChi' => 'R1, Lê Công Kiều, Hải Phòng',
            'Email' => 'ViVo@gmail.com',
            'Phone' => '0912247804'
        ]);
        HangSanXuat::create([
            'Ten' => 'Electrolux',
            'DiaChi' => 'F3, Nguyễn Cảnh Chân, Khánh Hòa',
            'Email' => 'Electrolux@gmail.com',
            'Phone' => '0316892771'
        ]);
        HangSanXuat::create([
            'Ten' => 'LG',
            'DiaChi' => 'N1, Nam Quốc Cang, Nam Định',
            'Email' => 'LG@gmail.com',
            'Phone' => '0233681010'
        ]);
        HangSanXuat::create([
            'Ten' => 'Toshiba',
            'DiaChi' => 'J4, Calmette, Hà Nam',
            'Email' => 'Toshiba@gmail.com',
            'Phone' => '0268628820'
        ]);
        HangSanXuat::create([
            'Ten' => 'Acer',
            'DiaChi' => 'F9, Nguyễn Hữu Cầu, Cao Bằng',
            'Email' => 'Acer@gmail.com',
            'Phone' => '0883771752'
        ]);
        HangSanXuat::create([
            'Ten' => 'ASUS',
            'DiaChi' => 'H6, Huỳnh Khương Ninh, Hà Tĩnh',
            'Email' => 'ASUS@gmail.com',
            'Phone' => '0135349672'
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'Điện lạnh',
            'MoTa' => null
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'Điện thoại',
            'MoTa' => 'Smart Phone'
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'LapTop',
            'MoTa' => null
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'Máy ảnh',
            'MoTa' => null
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'Máy tính bảng',
            'MoTa' => null
        ]);
        LoaiSanPham::create([
            'TenLoai' => 'Phụ kiện',
            'MoTa' => null
        ]);
        SanPham::create([
            'TenSanPham' => 'Xiaomi Redmi Note 6 Pro30',
            'MoTa' => '64GB',
            'SoLuongTon' => 10,
            'GiaNhap' => 1000000,
            'GiaBan' => 2000000,
            'HinhAnh' => 'DT_1.jpg',
            'LuotMua' => 12,
            'HangSanXuatId' => 2,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy giặt Electrolux 10 Kg29',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 4,
            'GiaNhap' => 5376969,
            'GiaBan' => 6376969,
            'HinhAnh' => 'DL_1.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 8,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy giặt Beko 9Kg28',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 8,
            'GiaNhap' => 2560459,
            'GiaBan' => 3560459,
            'HinhAnh' => 'DL_2.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 8,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Samsung Inverter 1227',
            'MoTa' => '2 Năm',
            'SoLuongTon' => 46,
            'GiaNhap' => 9208494,
            'GiaBan' => 10208494,
            'HinhAnh' => 'DT_2.jpg',
            'LuotMua' => 9,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy giặt Toshiba 9.5 Kg26',
            'MoTa' => '32Gb',
            'SoLuongTon' => 10,
            'GiaNhap' => 8996345,
            'GiaBan' => 9996345,
            'HinhAnh' => 'DL_3.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 10,
            'LoaiSanPhamId' => 1,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a125',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 39,
            'GiaNhap' => 5139972,
            'GiaBan' => 6139972,
            'HinhAnh' => 'DT_3.jpg',
            'LuotMua' => 0,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a224',
            'MoTa' => '16Gb',
            'SoLuongTon' => 5,
            'GiaNhap' => 1367603,
            'GiaBan' => 2367603,
            'HinhAnh' => 'DT_4.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus23',
            'MoTa' => '32Gb',
            'SoLuongTon' => 6,
            'GiaNhap' => 8322064,
            'GiaBan' => 9322064,
            'HinhAnh' => 'DT_5.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a122',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 17,
            'GiaNhap' => 5817358,
            'GiaBan' => 6817358,
            'HinhAnh' => 'DT_6.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a221',
            'MoTa' => '16Gb',
            'SoLuongTon' => 33,
            'GiaNhap' => 2647340,
            'GiaBan' => 3647340,
            'HinhAnh' => 'DT_7.jpg',
            'LuotMua' => 8,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus20',
            'MoTa' => '32Gb',
            'SoLuongTon' => 2,
            'GiaNhap' => 2299870,
            'GiaBan' => 3299870,
            'HinhAnh' => 'DT_8.jpg',
            'LuotMua' => 90,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a119',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 24,
            'GiaNhap' => 2674972,
            'GiaBan' => 3674972,
            'HinhAnh' => 'DT_9.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại xiaomi-mi-a218',
            'MoTa' => '16Gb',
            'SoLuongTon' => 48,
            'GiaNhap' => 6927375,
            'GiaBan' => 7927375,
            'HinhAnh' => 'DT_10.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Đt xiaomi-redmi-5-plus17',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 19,
            'GiaNhap' => 8344018,
            'GiaBan' => 9344018,
            'HinhAnh' => 'DT_11.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 3,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'samsung-galaxy-tab-e-9616',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 25,
            'GiaNhap' => 5775860,
            'GiaBan' => 6775860,
            'HinhAnh' => 'DT_12.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'samsung-galaxy-tab-e-9615',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 23,
            'GiaNhap' => 5175337,
            'GiaBan' => 6175337,
            'HinhAnh' => 'DT_13.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'samsung-galaxy-tab-e-9614',
            'MoTa' => '1 Năm FullBox',
            'SoLuongTon' => 39,
            'GiaNhap' => 3102066,
            'GiaBan' => 4102066,
            'HinhAnh' => 'DT_14.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Điện thoại vivo-y85-red13',
            'MoTa' => 'I3',
            'SoLuongTon' => 43,
            'GiaNhap' => 7205830,
            'GiaBan' => 8205830,
            'HinhAnh' => 'DT_15.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 7,
            'LoaiSanPhamId' => 2,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'LapTop acer-aspire-a31412',
            'MoTa' => 'I7',
            'SoLuongTon' => 28,
            'GiaNhap' => 4421204,
            'GiaBan' => 5421204,
            'HinhAnh' => 'LT_1.jpg',
            'LuotMua' => 9,
            'HangSanXuatId' => 11,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'LapTop acer-aspire-a71511',
            'MoTa' => 'I5',
            'SoLuongTon' => 22,
            'GiaNhap' => 6477731,
            'GiaBan' => 7477731,
            'HinhAnh' => 'LT_2.jpg',
            'LuotMua' => 10,
            'HangSanXuatId' => 11,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'LapTop asus-s510ua-i50',
            'MoTa' => 'I3',
            'SoLuongTon' => 30,
            'GiaNhap' => 7542377,
            'GiaBan' => 8542377,
            'HinhAnh' => 'LT_3.jpg',
            'LuotMua' => 15,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'LapTop asus-x44lua-i39',
            'MoTa' => 'Full box',
            'SoLuongTon' => 14,
            'GiaNhap' => 8256867,
            'GiaBan' => 9256867,
            'HinhAnh' => 'LT_4.jpg',
            'LuotMua' => 17,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 3,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy ảnh Cannon EOS 6D8',
            'MoTa' => 'Full box',
            'SoLuongTon' => 5,
            'GiaNhap' => 8396596,
            'GiaBan' => 9396596,
            'HinhAnh' => 'Camera_1.jpg',
            'LuotMua' => 12,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy ảnh Canon Ixus 1857',
            'MoTa' => 'Full box',
            'SoLuongTon' => 3,
            'GiaNhap' => 1812596,
            'GiaBan' => 2812596,
            'HinhAnh' => 'Camera_2.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy ảnh Canon EOS M506',
            'MoTa' => 'Full box',
            'SoLuongTon' => 19,
            'GiaNhap' => 4217622,
            'GiaBan' => 5217622,
            'HinhAnh' => 'Camera_3.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy ảnh Canon Ixus 2855',
            'MoTa' => 'Full box',
            'SoLuongTon' => 37,
            'GiaNhap' => 9344565,
            'GiaBan' => 10344565,
            'HinhAnh' => 'Camera_1.jpg',
            'LuotMua' => 4,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'Máy ảnh Canon Powershot4 ',
            'MoTa' => 'Test',
            'SoLuongTon' => 41,
            'GiaNhap' => 5761988,
            'GiaBan' => 6761988,
            'HinhAnh' => 'Camera_2.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 1,
            'LoaiSanPhamId' => 4,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'cap-lightning-2m-evalu3',
            'MoTa' => 'Test',
            'SoLuongTon' => 47,
            'GiaNhap' => 7613987,
            'GiaBan' => 8613987,
            'HinhAnh' => 'SP_1.jpg',
            'LuotMua' => 5,
            'HangSanXuatId' => 6,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'cap-lightning-20cm-esaver2',
            'MoTa' => 'Test',
            'SoLuongTon' => 30,
            'GiaNhap' => 7403373,
            'GiaBan' => 8403373,
            'HinhAnh' => 'SP_2.jpg',
            'LuotMua' => 1,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'cap-micro-1m-esaver1',
            'MoTa' => 'Test',
            'SoLuongTon' => 44,
            'GiaNhap' => 8930751,
            'GiaBan' => 9930751,
            'HinhAnh' => 'SP_3.jpg',
            'LuotMua' => 2,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'cap-micro-usb-20cm1',
            'MoTa' => 'Test',
            'SoLuongTon' => 32,
            'GiaNhap' => 3214440,
            'GiaBan' => 4214440,
            'HinhAnh' => 'SP_4.jpg',
            'LuotMua' => 3,
            'HangSanXuatId' => 5,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-22'
        ]);
        SanPham::create([
            'TenSanPham' => 'tai-nghe-chup-tai-kanen1',
            'MoTa' => '',
            'SoLuongTon' => 27,
            'GiaNhap' => 8870860,
            'GiaBan' => 9870860,
            'HinhAnh' => 'SP_5.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-22'
        ]);
        ChuongTrinhKhuyenMai::create([
            'TenChuongTrinh' => 'Khuyến mãi cực hot ngày 20/11',
            'MoTa' => ' giảm giá đến 5000đ các loại phụ kiện',
            'FromDate' => '2021-11-20',
            'ToDate' => '2022-12-01',
            'created_at' => '2021-10-19'
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 28,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 29,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 30,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 31,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 32,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 23,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 24,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 25,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 26,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Ctchuongtrinhkm::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 27,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
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
            'HinhAnh' => NULL,
            'Phone' => '0298123123',
            'DonViVanChuyenId' => 7,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 1,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Hồ Huấn Nghiệp',
            'Phone' => '0618431768',
            'TinhThanhPho' => NULL,
            'QuanHuyen' => NULL,
            'PhuongXa' => NULL,
            'DiaChiChiTiet' => 'J5, Nguyễn Hữu Cầu, Thanh Hóa',
            'CodeTinhThanhPho' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodePhuongXa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 2,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Hàm Nghi',
            'Phone' => '0452803292',
            'TinhThanhPho' => NULL,
            'QuanHuyen' => NULL,
            'PhuongXa' => NULL,
            'DiaChiChiTiet' => 'D4, Huỳnh Khương Ninh, Tiền Giang',
            'CodeTinhThanhPho' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodePhuongXa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 3,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Hồ Tùng Mậu',
            'Phone' => '0566425150',
            'TinhThanhPho' => NULL,
            'QuanHuyen' => NULL,
            'PhuongXa' => NULL,
            'DiaChiChiTiet' => 'P1, Bùi Viện, Hải Phòng',
            'CodeTinhThanhPho' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodePhuongXa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 4,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Nguyễn Cư Trinh',
            'Phone' => '0982099712',
            'TinhThanhPho' => NULL,
            'QuanHuyen' => NULL,
            'PhuongXa' => NULL,
            'DiaChiChiTiet' => 'W7, Mai Thị Lựu, Trà Vinh',
            'CodeTinhThanhPho' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodePhuongXa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 5,
            'KhachHangId' => 5,
            'TenNguoiNhan' => 'Bùi Viện',
            'Phone' => '0333641834',
            'TinhThanhPho' => NULL,
            'QuanHuyen' => NULL,
            'PhuongXa' => NULL,
            'DiaChiChiTiet' => 'D3, Nam Quốc Cang, Bình Định',
            'CodeTinhThanhPho' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodePhuongXa' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 8,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'CodeTinhThanhPho' => 79,
            'CodeQuanHuyen' => 785,
            'CodePhuongXa' => 27595,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 9,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'QuanHuyen' => 'Quận Long Biên',
            'PhuongXa' => 'Phường Thượng Thanh',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'CodeTinhThanhPho' => 1,
            'CodeQuanHuyen' => 4,
            'CodePhuongXa' => 115,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 10,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'CodeTinhThanhPho' => 79,
            'CodeQuanHuyen' => 785,
            'CodePhuongXa' => 27595,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Diachi::create([
            'id' => 11,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'QuanHuyen' => 'Quận Long Biên',
            'PhuongXa' => 'Phường Thượng Thanh',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'CodeTinhThanhPho' => 1,
            'CodeQuanHuyen' => 4,
            'CodePhuongXa' => 115,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 1,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 6,
            'TongTien' => 19799220,
            'TrangThai' => 1,
            'created_at' => '2021-01-26 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 2,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 23,
            'TongTien' => 199186558,
            'TrangThai' => 4,
            'created_at' => '2021-01-14 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 3,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 10,
            'TongTien' => 36473400,
            'TrangThai' => 4,
            'created_at' => '2021-01-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 4,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 2,
            'TongTien' => 20689130,
            'TrangThai' => 1,
            'created_at' => '2021-03-29 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 5,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 1,
            'created_at' => '2021-03-29 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 6,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 32,
            'TongTien' => 226826488,
            'TrangThai' => 2,
            'created_at' => '2021-04-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 7,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 10,
            'TongTien' => 42144400,
            'TrangThai' => 2,
            'created_at' => '2021-04-06 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 8,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 21,
            'TongTien' => 86551943,
            'TrangThai' => 2,
            'created_at' => '2021-01-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 9,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 6,
            'TongTien' => 21884040,
            'TrangThai' => 2,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 10,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 1,
            'created_at' => '2021-04-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 11,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 4,
            'created_at' => '2021-01-10 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 12,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 12,
            'TongTien' => 93373267,
            'TrangThai' => 1,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 13,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 3,
            'created_at' => '2021-01-26 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 14,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 5,
            'TongTien' => 39636875,
            'TrangThai' => 2,
            'created_at' => '2021-01-14 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 15,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 9,
            'TongTien' => 21308427,
            'TrangThai' => 2,
            'created_at' => '2021-01-14 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 16,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 2,
            'created_at' => '2021-03-29 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 17,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 19,
            'TongTien' => 192948484,
            'TrangThai' => 1,
            'created_at' => '2021-01-26 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 18,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 29,
            'TongTien' => 178599718,
            'TrangThai' => 3,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 19,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 15,
            'TongTien' => 148961265,
            'TrangThai' => 3,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 20,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 2,
            'created_at' => '2021-04-06 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 21,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 9,
            'TongTien' => 75630357,
            'TrangThai' => 4,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 22,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 11,
            'TongTien' => 94753857,
            'TrangThai' => 4,
            'created_at' => '2021-04-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 23,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 12,
            'TongTien' => 108205402,
            'TrangThai' => 1,
            'created_at' => '2021-01-26 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 24,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 1,
            'created_at' => '2021-01-26 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 25,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 4,
            'created_at' => '2021-04-27 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 26,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 4,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 27,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 3,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 28,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 23,
            'TongTien' => 95152427,
            'TrangThai' => 4,
            'created_at' => '2021-01-14 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 29,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 14,
            'TongTien' => 57428924,
            'TrangThai' => 2,
            'created_at' => '2021-01-28 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hoadon::create([
            'id' => 30,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => 3,
            'created_at' => '2021-01-14 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 1,
            'HoaDonId' => 19,
            'SanPhamId' => 30,
            'SoLuong' => 15,
            'GiaBan' => 9930751,
            'GiaGiam' => 0,
            'ThanhTien' => 148961265,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 2,
            'HoaDonId' => 18,
            'SanPhamId' => 11,
            'SoLuong' => 17,
            'GiaBan' => 3299870,
            'GiaGiam' => 0,
            'ThanhTien' => 56097790,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 3,
            'HoaDonId' => 6,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaBan' => 3674972,
            'GiaGiam' => 0,
            'ThanhTien' => 18374860,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 4,
            'HoaDonId' => 17,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaBan' => 9870860,
            'GiaGiam' => 0,
            'ThanhTien' => 29612580,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 5,
            'HoaDonId' => 8,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'GiaBan' => 7927375,
            'GiaGiam' => 0,
            'ThanhTien' => 7927375,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 6,
            'HoaDonId' => 4,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaBan' => 10344565,
            'GiaGiam' => 0,
            'ThanhTien' => 20689130,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 7,
            'HoaDonId' => 12,
            'SanPhamId' => 20,
            'SoLuong' => 7,
            'GiaBan' => 7477731,
            'GiaGiam' => 0,
            'ThanhTien' => 52344117,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 8,
            'HoaDonId' => 6,
            'SanPhamId' => 18,
            'SoLuong' => 9,
            'GiaBan' => 8205830,
            'GiaGiam' => 0,
            'ThanhTien' => 73852470,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 9,
            'HoaDonId' => 21,
            'SanPhamId' => 29,
            'SoLuong' => 9,
            'GiaBan' => 8403373,
            'GiaGiam' => 0,
            'ThanhTien' => 75630357,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 10,
            'HoaDonId' => 8,
            'SanPhamId' => 17,
            'SoLuong' => 12,
            'GiaBan' => 4102066,
            'GiaGiam' => 0,
            'ThanhTien' => 49224792,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 11,
            'HoaDonId' => 23,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'GiaBan' => 5421204,
            'GiaGiam' => 0,
            'ThanhTien' => 5421204,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 12,
            'HoaDonId' => 15,
            'SanPhamId' => 7,
            'SoLuong' => 9,
            'GiaBan' => 2367603,
            'GiaGiam' => 0,
            'ThanhTien' => 21308427,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 13,
            'HoaDonId' => 2,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaBan' => 4102066,
            'GiaGiam' => 0,
            'ThanhTien' => 12306198,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 14,
            'HoaDonId' => 29,
            'SanPhamId' => 17,
            'SoLuong' => 14,
            'GiaBan' => 4102066,
            'GiaGiam' => 0,
            'ThanhTien' => 57428924,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 15,
            'HoaDonId' => 7,
            'SanPhamId' => 31,
            'SoLuong' => 10,
            'GiaBan' => 4214440,
            'GiaGiam' => 0,
            'ThanhTien' => 42144400,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 16,
            'HoaDonId' => 9,
            'SanPhamId' => 10,
            'SoLuong' => 6,
            'GiaBan' => 3647340,
            'GiaGiam' => 0,
            'ThanhTien' => 21884040,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 17,
            'HoaDonId' => 12,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaBan' => 8205830,
            'GiaGiam' => 0,
            'ThanhTien' => 41029150,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 18,
            'HoaDonId' => 22,
            'SanPhamId' => 28,
            'SoLuong' => 11,
            'GiaBan' => 8613987,
            'GiaGiam' => 0,
            'ThanhTien' => 94753857,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 19,
            'HoaDonId' => 28,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'GiaBan' => 9930751,
            'GiaGiam' => 0,
            'ThanhTien' => 19861502,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 20,
            'HoaDonId' => 14,
            'SanPhamId' => 13,
            'SoLuong' => 5,
            'GiaBan' => 7927375,
            'GiaGiam' => 0,
            'ThanhTien' => 39636875,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 21,
            'HoaDonId' => 1,
            'SanPhamId' => 11,
            'SoLuong' => 6,
            'GiaBan' => 3299870,
            'GiaGiam' => 0,
            'ThanhTien' => 19799220,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 22,
            'HoaDonId' => 28,
            'SanPhamId' => 10,
            'SoLuong' => 6,
            'GiaBan' => 3647340,
            'GiaGiam' => 0,
            'ThanhTien' => 21884040,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 23,
            'HoaDonId' => 3,
            'SanPhamId' => 10,
            'SoLuong' => 10,
            'GiaBan' => 3647340,
            'GiaGiam' => 0,
            'ThanhTien' => 36473400,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 24,
            'HoaDonId' => 6,
            'SanPhamId' => 20,
            'SoLuong' => 18,
            'GiaBan' => 7477731,
            'GiaGiam' => 0,
            'ThanhTien' => 134599158,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 25,
            'HoaDonId' => 17,
            'SanPhamId' => 4,
            'SoLuong' => 16,
            'GiaBan' => 10208494,
            'GiaGiam' => 0,
            'ThanhTien' => 163335904,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 26,
            'HoaDonId' => 2,
            'SanPhamId' => 14,
            'SoLuong' => 20,
            'GiaBan' => 9344018,
            'GiaGiam' => 0,
            'ThanhTien' => 186880360,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 27,
            'HoaDonId' => 8,
            'SanPhamId' => 12,
            'SoLuong' => 8,
            'GiaBan' => 3674972,
            'GiaGiam' => 0,
            'ThanhTien' => 29399776,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 28,
            'HoaDonId' => 28,
            'SanPhamId' => 3,
            'SoLuong' => 15,
            'GiaBan' => 3560459,
            'GiaGiam' => 0,
            'ThanhTien' => 53406885,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 29,
            'HoaDonId' => 23,
            'SanPhamId' => 14,
            'SoLuong' => 11,
            'GiaBan' => 9344018,
            'GiaGiam' => 0,
            'ThanhTien' => 102784198,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 30,
            'HoaDonId' => 18,
            'SanPhamId' => 4,
            'SoLuong' => 12,
            'GiaBan' => 10208494,
            'GiaGiam' => 0,
            'ThanhTien' => 122501928,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Giohang::create([
            'id' => 1,
            'KhachHangId' => 1,
            'SanPhamId' => 30,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 2,
            'KhachHangId' => 1,
            'SanPhamId' => 29,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 3,
            'KhachHangId' => 1,
            'SanPhamId' => 28,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 4,
            'KhachHangId' => 2,
            'SanPhamId' => 27,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 5,
            'KhachHangId' => 2,
            'SanPhamId' => 26,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 6,
            'KhachHangId' => 2,
            'SanPhamId' => 25,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 7,
            'KhachHangId' => 3,
            'SanPhamId' => 24,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 8,
            'KhachHangId' => 3,
            'SanPhamId' => 23,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 9,
            'KhachHangId' => 3,
            'SanPhamId' => 22,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 10,
            'KhachHangId' => 4,
            'SanPhamId' => 21,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 11,
            'KhachHangId' => 4,
            'SanPhamId' => 20,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 12,
            'KhachHangId' => 4,
            'SanPhamId' => 19,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 13,
            'KhachHangId' => 5,
            'SanPhamId' => 18,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Giohang::create([
            'id' => 14,
            'KhachHangId' => 5,
            'SanPhamId' => 17,
            'SoLuong' => 10,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 1,
            'KhachHangId' => 1,
            'SanPhamId' => 30,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 2,
            'KhachHangId' => 1,
            'SanPhamId' => 29,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 3,
            'KhachHangId' => 1,
            'SanPhamId' => 28,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 4,
            'KhachHangId' => 2,
            'SanPhamId' => 27,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 5,
            'KhachHangId' => 2,
            'SanPhamId' => 26,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 6,
            'KhachHangId' => 2,
            'SanPhamId' => 25,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 7,
            'KhachHangId' => 3,
            'SanPhamId' => 24,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 8,
            'KhachHangId' => 3,
            'SanPhamId' => 23,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 9,
            'KhachHangId' => 3,
            'SanPhamId' => 22,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 10,
            'KhachHangId' => 4,
            'SanPhamId' => 21,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 11,
            'KhachHangId' => 4,
            'SanPhamId' => 20,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 12,
            'KhachHangId' => 4,
            'SanPhamId' => 19,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 13,
            'KhachHangId' => 5,
            'SanPhamId' => 18,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
        Yeuthich::create([
            'id' => 14,
            'KhachHangId' => 5,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);
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
        Conversation::create([
            'id' => 1,
            'NhanVienId' => 1,
            'KhachHangId' => 1,
            'created_at' => '2022-01-15 16:46:08',
            'updated_at' => NULL
        ]);
        Conversation::create([
            'id' => 2,
            'NhanVienId' => 1,
            'KhachHangId' => 2,
            'created_at' => '2022-01-15 16:46:08',
            'updated_at' => NULL
        ]);
        Conversation::create([
            'id' => 3,
            'NhanVienId' => 1,
            'KhachHangId' => 3,
            'created_at' => '2022-01-15 16:46:08',
            'updated_at' => NULL
        ]);
        Conversation::create([
            'id' => 4,
            'NhanVienId' => 1,
            'KhachHangId' => 4,
            'created_at' => '2022-01-15 16:46:08',
            'updated_at' => NULL
        ]);
        Conversation::create([
            'id' => 5,
            'NhanVienId' => 1,
            'KhachHangId' => 5,
            'created_at' => '2022-01-15 16:46:08',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 1,
            'Body' => 'Hello Admin',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 2,
            'created_at' => '2020-12-31 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 2,
            'Body' => 'Mon nay` ban nhu nao`?',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 2,
            'created_at' => '2021-01-02 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 3,
            'Body' => 'Gia bao nhieu',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 2,
            'created_at' => '2021-01-04 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 4,
            'Body' => '200k ban ko',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 2,
            'created_at' => '2021-01-07 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 5,
            'Body' => 'abcxyz thoi ko mua nua',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 2,
            'created_at' => '2021-01-08 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 6,
            'Body' => 'Hello khach',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 2,
            'created_at' => '2021-01-01 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 7,
            'Body' => 'Mon nay sieu re~',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 2,
            'created_at' => '2021-01-03 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 8,
            'Body' => 'mua di mua di',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 2,
            'created_at' => '2021-01-05 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 9,
            'Body' => 'ban voi gia sale mua di dung ngai',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 2,
            'created_at' => '2021-01-06 17:00:00',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 10,
            'Body' => 'khong mua t chem',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 2,
            'created_at' => '2021-01-09 17:00:00',
            'updated_at' => NULL
        ]);
    }
}
