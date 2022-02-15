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
use App\Models\LichSuVanChuyen;

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
        Khachhang::create([
            'id' => 1,
            'Username' => 'Khach01',
            'Email' => 'Khach01@gmail.com',
            'Phone' => '0618431768',
            'MatKhau' => 'password123',
            'HoTen' => 'Hồ Huấn Nghiệp',
            'NgaySinh' => '1990-11-24 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'J5, Nguyễn Hữu Cầu, Thanh Hóa',
            'HinhAnh' => '/storage/assets/images/avatar/User/1/image-5.jpg',
            'remember_token' => NULL,
            'created_at' => '2008-04-16 18:38:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 2,
            'Username' => 'Khach02',
            'Email' => 'Khach02@gmail.com',
            'Phone' => '0452803292',
            'MatKhau' => 'password123',
            'HoTen' => 'Hàm Nghi',
            'NgaySinh' => '1996-10-15 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'D4, Huỳnh Khương Ninh, Tiền Giang',
            'HinhAnh' => '/storage/assets/images/avatar/User/2/image-6.jpg',
            'remember_token' => NULL,
            'created_at' => '2002-03-29 15:09:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 3,
            'Username' => 'Khach03',
            'Email' => 'Khach03@gmail.com',
            'Phone' => '0566425150',
            'MatKhau' => 'password123',
            'HoTen' => 'Hồ Tùng Mậu',
            'NgaySinh' => '1986-04-09 00:00:00',
            'GioiTinh' => 0,
            'DiaChi' => 'P1, Bùi Viện, Hải Phòng',
            'HinhAnh' => '/storage/assets/images/avatar/User/3/thumb-1.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-05-01 02:54:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 4,
            'Username' => 'Khach04',
            'Email' => 'Khach04@gmail.com',
            'Phone' => '0982099712',
            'MatKhau' => 'password123',
            'HoTen' => 'Nguyễn Cư Trinh',
            'NgaySinh' => '1994-08-27 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => 'W7, Mai Thị Lựu, Trà Vinh',
            'HinhAnh' => '/storage/assets/images/avatar/User/4/thumb-2.jpg',
            'remember_token' => NULL,
            'created_at' => '2014-12-07 00:00:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 5,
            'Username' => 'Khach05',
            'Email' => 'Khach05@gmail.com',
            'Phone' => '0333641834',
            'MatKhau' => 'password123',
            'HoTen' => 'Bùi Viện',
            'NgaySinh' => '1990-09-06 00:00:00',
            'GioiTinh' => 1,
            'DiaChi' => 'D3, Nam Quốc Cang, Bình Định',
            'HinhAnh' => '/storage/assets/images/avatar/User/5/thumb-3.jpg',
            'remember_token' => NULL,
            'created_at' => '2010-08-31 22:21:26',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 6,
            'Username' => 'yellowgoose667',
            'Email' => 'eva.brunet@example.com',
            'Phone' => '01-70-39-10-88',
            'MatKhau' => 'password123',
            'HoTen' => 'Eva_Brunet',
            'NgaySinh' => '1969-10-04 21:13:06',
            'GioiTinh' => 0,
            'DiaChi' => 'Rue Barrier, Rouen, France',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/76.jpg',
            'remember_token' => NULL,
            'created_at' => '2008-07-14 22:44:31',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 7,
            'Username' => 'purplebird327',
            'Email' => 'tristan.moller@example.com',
            'Phone' => '16961009',
            'MatKhau' => 'password123',
            'HoTen' => 'Tristan_Møller',
            'NgaySinh' => '1964-08-09 17:32:23',
            'GioiTinh' => 1,
            'DiaChi' => 'Græsvangen, Sønder Stenderup, Denmark',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/99.jpg',
            'remember_token' => NULL,
            'created_at' => '2010-09-07 05:38:04',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 8,
            'Username' => 'orangedog977',
            'Email' => 'anselm.abel@example.com',
            'Phone' => '0497-4150057',
            'MatKhau' => 'password123',
            'HoTen' => 'Anselm_Abel',
            'NgaySinh' => '1964-10-06 19:23:45',
            'GioiTinh' => 1,
            'DiaChi' => 'Ahornweg, Markkleeberg, Germany',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/46.jpg',
            'remember_token' => NULL,
            'created_at' => '2012-10-22 14:56:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 9,
            'Username' => 'silvermeercat905',
            'Email' => 'isabelle.baker@example.com',
            'Phone' => '021-635-8296',
            'MatKhau' => 'password123',
            'HoTen' => 'Isabelle_Baker',
            'NgaySinh' => '1972-04-29 17:31:08',
            'GioiTinh' => 0,
            'DiaChi' => 'New Street, Dungarvan, Ireland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/2.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-12-29 16:48:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 10,
            'Username' => 'redmouse558',
            'Email' => 'selma.rasmussen@example.com',
            'Phone' => '99854271',
            'MatKhau' => 'password123',
            'HoTen' => 'Selma_Rasmussen',
            'NgaySinh' => '1945-04-14 07:25:06',
            'GioiTinh' => 0,
            'DiaChi' => 'Skovstjernevej, Viby Sj., Denmark',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/54.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-07-19 22:11:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 11,
            'Username' => 'organiccat269',
            'Email' => 'xavier.smith@example.com',
            'Phone' => '(170)-823-5752',
            'MatKhau' => 'password123',
            'HoTen' => 'Xavier_Smith',
            'NgaySinh' => '1983-01-19 03:19:46',
            'GioiTinh' => 1,
            'DiaChi' => 'Mt Eden Road, Tauranga, New Zealand',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/71.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-10-05 19:33:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 12,
            'Username' => 'beautifultiger243',
            'Email' => 'dilano.degroen@example.com',
            'Phone' => '(489)-330-0847',
            'MatKhau' => 'password123',
            'HoTen' => 'Dilano_De Groen',
            'NgaySinh' => '1947-05-19 20:26:13',
            'GioiTinh' => 1,
            'DiaChi' => 'Duykerdam, Ens, Netherlands',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/53.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-03-01 14:11:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 13,
            'Username' => 'yellowdog132',
            'Email' => 'jaime.cano@example.com',
            'Phone' => '947-024-220',
            'MatKhau' => 'password123',
            'HoTen' => 'Jaime_Cano',
            'NgaySinh' => '1945-10-08 15:01:10',
            'GioiTinh' => 1,
            'DiaChi' => 'Paseo de Extremadura, Santa Cruz de Tenerife, Spain',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/3.jpg',
            'remember_token' => NULL,
            'created_at' => '2000-07-16 19:16:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 14,
            'Username' => 'silverpanda724',
            'Email' => 'selami.vanleeuwe@example.com',
            'Phone' => '(607)-530-6761',
            'MatKhau' => 'password123',
            'HoTen' => 'Selami_Van Leeuwe',
            'NgaySinh' => '1964-09-09 07:09:13',
            'GioiTinh' => 1,
            'DiaChi' => 'Koppertjesland, Sint Jansteen, Netherlands',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/64.jpg',
            'remember_token' => NULL,
            'created_at' => '2005-03-18 12:46:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 15,
            'Username' => 'silversnake914',
            'Email' => 'arianna.mendoza@example.com',
            'Phone' => '01-5137-4415',
            'MatKhau' => 'password123',
            'HoTen' => 'Arianna_Mendoza',
            'NgaySinh' => '1989-03-06 19:44:01',
            'GioiTinh' => 0,
            'DiaChi' => 'Homestead Rd, Busselton, Australia',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/66.jpg',
            'remember_token' => NULL,
            'created_at' => '2009-06-07 13:03:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 16,
            'Username' => 'whiteladybug785',
            'Email' => 'halil.denis@example.com',
            'Phone' => '076 624 70 22',
            'MatKhau' => 'password123',
            'HoTen' => 'Monsieur.Halil_Denis',
            'NgaySinh' => '1978-08-22 07:29:16',
            'GioiTinh' => 1,
            'DiaChi' => 'Rue de LAbbé-Roger-Derry, Thusis, Switzerland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/59.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-07-13 09:56:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 17,
            'Username' => 'orangezebra649',
            'Email' => 'winfried.bock@example.com',
            'Phone' => '0455-7981435',
            'MatKhau' => 'password123',
            'HoTen' => 'Winfried_Böck',
            'NgaySinh' => '1979-04-11 00:49:24',
            'GioiTinh' => 1,
            'DiaChi' => 'Birkenweg, Pausa-Mühltroff, Germany',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/53.jpg',
            'remember_token' => NULL,
            'created_at' => '2009-05-11 17:31:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 18,
            'Username' => 'biggorilla358',
            'Email' => 'grace.stanley@example.com',
            'Phone' => '015396 56883',
            'MatKhau' => 'password123',
            'HoTen' => 'Grace_Stanley',
            'NgaySinh' => '1962-03-24 15:15:53',
            'GioiTinh' => 0,
            'DiaChi' => 'Manor Road, Portsmouth, United Kingdom',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/22.jpg',
            'remember_token' => NULL,
            'created_at' => '2012-03-15 16:48:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 19,
            'Username' => 'redwolf926',
            'Email' => 'ravn.bore@example.com',
            'Phone' => '70326619',
            'MatKhau' => 'password123',
            'HoTen' => 'Ravn_Bore',
            'NgaySinh' => '1959-11-23 19:32:54',
            'GioiTinh' => 1,
            'DiaChi' => 'Valmueveien, Valestrandfossen, Norway',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/98.jpg',
            'remember_token' => NULL,
            'created_at' => '2002-12-10 14:26:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 20,
            'Username' => 'purplerabbit548',
            'Email' => 'gina.evans@example.com',
            'Phone' => '(042)-015-6700',
            'MatKhau' => 'password123',
            'HoTen' => 'Gina_Evans',
            'NgaySinh' => '1975-01-17 18:11:50',
            'GioiTinh' => 0,
            'DiaChi' => 'Mcgowen St, Saint Paul, United States',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/41.jpg',
            'remember_token' => NULL,
            'created_at' => '2008-02-06 04:46:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 21,
            'Username' => 'ticklishfrog305',
            'Email' => 'yvete.martins@example.com',
            'Phone' => '(81) 3896-1502',
            'MatKhau' => 'password123',
            'HoTen' => 'Yvete_Martins',
            'NgaySinh' => '1960-02-19 18:23:42',
            'GioiTinh' => 0,
            'DiaChi' => 'Travessa dos Martírios, Rio Branco, Brazil',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/35.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-09-01 11:32:54',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 22,
            'Username' => 'sadswan412',
            'Email' => 'lucas.johnston@example.com',
            'Phone' => '01-9246-8431',
            'MatKhau' => 'password123',
            'HoTen' => 'Lucas_Johnston',
            'NgaySinh' => '1951-01-15 12:27:21',
            'GioiTinh' => 1,
            'DiaChi' => 'Robinson Rd, Warragul, Australia',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/63.jpg',
            'remember_token' => NULL,
            'created_at' => '2014-01-18 02:25:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 23,
            'Username' => 'tinymeercat482',
            'Email' => 'jose.ortega@example.com',
            'Phone' => '962-099-714',
            'MatKhau' => 'password123',
            'HoTen' => 'Jose_Ortega',
            'NgaySinh' => '1995-06-03 22:02:34',
            'GioiTinh' => 0,
            'DiaChi' => 'Calle de Alcalá, Mérida, Spain',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/26.jpg',
            'remember_token' => NULL,
            'created_at' => '2005-03-26 08:27:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 24,
            'Username' => 'tinyswan309',
            'Email' => 'noah.fabre@example.com',
            'Phone' => '077 454 37 76',
            'MatKhau' => 'password123',
            'HoTen' => 'Monsieur.Noah_Fabre',
            'NgaySinh' => '1996-05-14 06:40:34',
            'GioiTinh' => 1,
            'DiaChi' => 'Place du 8 Novembre 1942, Saanen, Switzerland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/26.jpg',
            'remember_token' => NULL,
            'created_at' => '2014-01-08 18:01:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 25,
            'Username' => 'crazyleopard372',
            'Email' => 'kayla.powell@example.com',
            'Phone' => '011-887-3410',
            'MatKhau' => 'password123',
            'HoTen' => 'Kayla_Powell',
            'NgaySinh' => '1975-01-10 13:25:11',
            'GioiTinh' => 0,
            'DiaChi' => 'Rookery Road, Balbriggan, Ireland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/89.jpg',
            'remember_token' => NULL,
            'created_at' => '2009-05-30 23:44:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 26,
            'Username' => 'lazyladybug318',
            'Email' => 'necati.yildirim@example.com',
            'Phone' => '(044)-771-1565',
            'MatKhau' => 'password123',
            'HoTen' => 'Necati_Yıldırım',
            'NgaySinh' => '1971-05-05 09:53:45',
            'GioiTinh' => 1,
            'DiaChi' => 'Kushimoto Sk, Çorum, Turkey',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/52.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-12-29 23:36:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 27,
            'Username' => 'bluetiger184',
            'Email' => 'murat.basoglu@example.com',
            'Phone' => '(417)-493-7694',
            'MatKhau' => 'password123',
            'HoTen' => 'Murat_Başoğlu',
            'NgaySinh' => '1966-07-28 06:25:59',
            'GioiTinh' => 1,
            'DiaChi' => 'Mevlana Cd, Erzurum, Turkey',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/20.jpg',
            'remember_token' => NULL,
            'created_at' => '2011-09-30 05:49:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 28,
            'Username' => 'purplefish964',
            'Email' => 'myraaly.prs@example.com',
            'Phone' => '058-72469339',
            'MatKhau' => 'password123',
            'HoTen' => 'اميرعلي_پارسا',
            'NgaySinh' => '1981-01-24 11:50:09',
            'GioiTinh' => 1,
            'DiaChi' => 'آفریقا, خوی, Iran',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/83.jpg',
            'remember_token' => NULL,
            'created_at' => '2013-09-27 13:15:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 29,
            'Username' => 'yellowbird754',
            'Email' => 'lise.giraud@example.com',
            'Phone' => '01-34-48-10-18',
            'MatKhau' => 'password123',
            'HoTen' => 'Lise_Giraud',
            'NgaySinh' => '1988-08-14 05:19:16',
            'GioiTinh' => 0,
            'DiaChi' => 'Rue Paul Bert, Aulnay-sous-Bois, France',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/41.jpg',
            'remember_token' => NULL,
            'created_at' => '2003-06-18 07:52:26',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 30,
            'Username' => 'blackelephant735',
            'Email' => 'aarshy.qsmy@example.com',
            'Phone' => '038-68498535',
            'MatKhau' => 'password123',
            'HoTen' => 'عرشيا_قاسمی',
            'NgaySinh' => '1967-06-16 19:53:12',
            'GioiTinh' => 1,
            'DiaChi' => 'استاد قریب, ساوه, Iran',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/22.jpg',
            'remember_token' => NULL,
            'created_at' => '2006-02-02 06:34:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 31,
            'Username' => 'sadladybug654',
            'Email' => 'emma.ross@example.com',
            'Phone' => '193-837-2560',
            'MatKhau' => 'password123',
            'HoTen' => 'Emma_Ross',
            'NgaySinh' => '1947-03-07 12:57:24',
            'GioiTinh' => 0,
            'DiaChi' => 'Dundas Rd, Russell, Canada',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/1.jpg',
            'remember_token' => NULL,
            'created_at' => '2005-01-23 16:12:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 32,
            'Username' => 'whitemouse706',
            'Email' => 'antonia.gallego@example.com',
            'Phone' => '997-476-306',
            'MatKhau' => 'password123',
            'HoTen' => 'Antonia_Gallego',
            'NgaySinh' => '1973-08-15 11:11:37',
            'GioiTinh' => 0,
            'DiaChi' => 'Calle del Pez, Almería, Spain',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/26.jpg',
            'remember_token' => NULL,
            'created_at' => '2007-01-19 20:20:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 33,
            'Username' => 'lazypanda842',
            'Email' => 'shyn.slry@example.com',
            'Phone' => '046-43829717',
            'MatKhau' => 'password123',
            'HoTen' => 'شایان_سالاری',
            'NgaySinh' => '1953-10-10 17:41:53',
            'GioiTinh' => 1,
            'DiaChi' => 'آیت الله طالقانی, سنندج, Iran',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/56.jpg',
            'remember_token' => NULL,
            'created_at' => '2005-01-25 12:05:54',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 34,
            'Username' => 'tinybird421',
            'Email' => 'zachary.willis@example.com',
            'Phone' => '041-970-5705',
            'MatKhau' => 'password123',
            'HoTen' => 'Zachary_Willis',
            'NgaySinh' => '1995-08-22 13:42:32',
            'GioiTinh' => 1,
            'DiaChi' => 'Albert Road, Tralee, Ireland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/58.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-03-10 06:26:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 35,
            'Username' => 'heavywolf136',
            'Email' => 'erica.morgan@example.com',
            'Phone' => '(507)-002-2277',
            'MatKhau' => 'password123',
            'HoTen' => 'Erica_Morgan',
            'NgaySinh' => '1974-03-24 12:16:08',
            'GioiTinh' => 0,
            'DiaChi' => 'Samaritan Dr, Aubrey, United States',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/46.jpg',
            'remember_token' => NULL,
            'created_at' => '2005-09-28 02:56:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 36,
            'Username' => 'crazypanda754',
            'Email' => 'jaylen.vanderzwaan@example.com',
            'Phone' => '(534)-286-1389',
            'MatKhau' => 'password123',
            'HoTen' => 'Jaylen_Van der Zwaan',
            'NgaySinh' => '1952-04-24 18:11:57',
            'GioiTinh' => 1,
            'DiaChi' => 'Clioplein, Overloon, Netherlands',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/78.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-02-20 02:21:13',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 37,
            'Username' => 'purplecat202',
            'Email' => 'adele.joly@example.com',
            'Phone' => '02-43-99-12-72',
            'MatKhau' => 'password123',
            'HoTen' => 'Adèle_Joly',
            'NgaySinh' => '1989-08-09 22:27:43',
            'GioiTinh' => 0,
            'DiaChi' => 'Rue Abel-Hovelacque, Nancy, France',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/27.jpg',
            'remember_token' => NULL,
            'created_at' => '2003-06-22 09:56:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 38,
            'Username' => 'smallzebra313',
            'Email' => 'ruben.clarke@example.com',
            'Phone' => '017684 44529',
            'MatKhau' => 'password123',
            'HoTen' => 'Ruben_Clarke',
            'NgaySinh' => '1980-09-05 19:13:46',
            'GioiTinh' => 1,
            'DiaChi' => 'Mill Lane, St Davids, United Kingdom',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/1.jpg',
            'remember_token' => NULL,
            'created_at' => '2013-12-12 01:39:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 39,
            'Username' => 'purplebird934',
            'Email' => 'lilou.perrin@example.com',
            'Phone' => '05-83-43-99-24',
            'MatKhau' => 'password123',
            'HoTen' => 'Lilou_Perrin',
            'NgaySinh' => '1987-11-21 23:05:26',
            'GioiTinh' => 0,
            'DiaChi' => 'Boulevard de la Duchère, Saint-Pierre, France',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/89.jpg',
            'remember_token' => NULL,
            'created_at' => '2014-04-25 09:26:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 40,
            'Username' => 'brownfish292',
            'Email' => 'khymy.kmyrn@example.com',
            'Phone' => '092-03645982',
            'MatKhau' => 'password123',
            'HoTen' => 'کیمیا_كامياران',
            'NgaySinh' => '1970-07-22 04:12:24',
            'GioiTinh' => 0,
            'DiaChi' => 'میدان امام خمینی, تبریز, Iran',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/24.jpg',
            'remember_token' => NULL,
            'created_at' => '2014-09-25 01:14:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 41,
            'Username' => 'goldensnake516',
            'Email' => 'tale.smestad@example.com',
            'Phone' => '57356215',
            'MatKhau' => 'password123',
            'HoTen' => 'Tale_Smestad',
            'NgaySinh' => '1947-09-13 20:39:01',
            'GioiTinh' => 0,
            'DiaChi' => 'Langbølgen, Sørland, Norway',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/38.jpg',
            'remember_token' => NULL,
            'created_at' => '2000-09-19 08:51:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 42,
            'Username' => 'happybird837',
            'Email' => 'alexis.chan@example.com',
            'Phone' => '757-179-0206',
            'MatKhau' => 'password123',
            'HoTen' => 'Alexis_Chan',
            'NgaySinh' => '1957-12-11 03:24:31',
            'GioiTinh' => 0,
            'DiaChi' => 'Pine Rd, Stirling, Canada',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/13.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-05-24 23:32:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 43,
            'Username' => 'lazysnake652',
            'Email' => 'malou.nielsen@example.com',
            'Phone' => '96787914',
            'MatKhau' => 'password123',
            'HoTen' => 'Malou_Nielsen',
            'NgaySinh' => '1949-10-23 09:12:07',
            'GioiTinh' => 0,
            'DiaChi' => 'Buen, Assens, Denmark',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/25.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-10-30 02:10:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 44,
            'Username' => 'silvercat129',
            'Email' => 'gul.gunday@example.com',
            'Phone' => '(420)-339-4996',
            'MatKhau' => 'password123',
            'HoTen' => 'Gül_Günday',
            'NgaySinh' => '1965-11-23 11:09:42',
            'GioiTinh' => 0,
            'DiaChi' => 'Fatih Sultan Mehmet Cd, Kayseri, Turkey',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/22.jpg',
            'remember_token' => NULL,
            'created_at' => '2010-12-16 19:14:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 45,
            'Username' => 'happyrabbit168',
            'Email' => 'awyn.khrymy@example.com',
            'Phone' => '090-89999548',
            'MatKhau' => 'password123',
            'HoTen' => 'آوین_کریمی',
            'NgaySinh' => '1980-05-27 14:27:24',
            'GioiTinh' => 0,
            'DiaChi' => 'آیت الله مدرس, زاهدان, Iran',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/3.jpg',
            'remember_token' => NULL,
            'created_at' => '2010-04-22 00:38:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 46,
            'Username' => 'blackduck772',
            'Email' => 'dora.sullivan@example.com',
            'Phone' => '(954)-636-3855',
            'MatKhau' => 'password123',
            'HoTen' => 'Dora_Sullivan',
            'NgaySinh' => '1961-05-25 02:42:55',
            'GioiTinh' => 0,
            'DiaChi' => 'Wycliff Ave, Stockton, United States',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/90.jpg',
            'remember_token' => NULL,
            'created_at' => '2003-08-26 00:31:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 47,
            'Username' => 'purplefish885',
            'Email' => 'stephanie.ross@example.com',
            'Phone' => '051-945-8379',
            'MatKhau' => 'password123',
            'HoTen' => 'Stephanie_Ross',
            'NgaySinh' => '1992-02-25 05:51:39',
            'GioiTinh' => 0,
            'DiaChi' => 'The Drive, Roscommon, Ireland',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/70.jpg',
            'remember_token' => NULL,
            'created_at' => '2002-05-02 07:42:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 48,
            'Username' => 'yellowpeacock450',
            'Email' => 'serenity.mccoy@example.com',
            'Phone' => '01-2775-8588',
            'MatKhau' => 'password123',
            'HoTen' => 'Serenity_Mccoy',
            'NgaySinh' => '1956-10-18 13:23:55',
            'GioiTinh' => 0,
            'DiaChi' => 'E North St, Bendigo, Australia',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/65.jpg',
            'remember_token' => NULL,
            'created_at' => '2000-09-19 19:55:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 49,
            'Username' => 'redwolf324',
            'Email' => 'luz.arias@example.com',
            'Phone' => '938-354-983',
            'MatKhau' => 'password123',
            'HoTen' => 'Luz_Arias',
            'NgaySinh' => '1989-08-05 18:43:59',
            'GioiTinh' => 0,
            'DiaChi' => 'Paseo de Zorrilla, Alcobendas, Spain',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/53.jpg',
            'remember_token' => NULL,
            'created_at' => '2011-08-07 11:28:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 50,
            'Username' => 'yellowpanda307',
            'Email' => 'storm.larsen@example.com',
            'Phone' => '85506086',
            'MatKhau' => 'password123',
            'HoTen' => 'Storm_Larsen',
            'NgaySinh' => '1990-02-15 03:39:18',
            'GioiTinh' => 1,
            'DiaChi' => 'Søvænget, Jerslev Sj, Denmark',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/51.jpg',
            'remember_token' => NULL,
            'created_at' => '2010-11-01 04:36:38',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 51,
            'Username' => 'goldensnake827',
            'Email' => 'lila.pierre@example.com',
            'Phone' => '04-00-84-09-54',
            'MatKhau' => 'password123',
            'HoTen' => 'Lila_Pierre',
            'NgaySinh' => '1974-12-29 17:03:49',
            'GioiTinh' => 0,
            'DiaChi' => 'Rue Dugas-Montbel, Orléans, France',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/11.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-05-16 19:37:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 52,
            'Username' => 'brownostrich388',
            'Email' => 'wayne.rhodes@example.com',
            'Phone' => '015396 72883',
            'MatKhau' => 'password123',
            'HoTen' => 'Wayne_Rhodes',
            'NgaySinh' => '1970-12-25 11:36:04',
            'GioiTinh' => 1,
            'DiaChi' => 'Station Road, Leicester, United Kingdom',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/73.jpg',
            'remember_token' => NULL,
            'created_at' => '2004-05-15 19:18:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 53,
            'Username' => 'smallbird737',
            'Email' => 'naomi.westerhof@example.com',
            'Phone' => '(485)-591-8578',
            'MatKhau' => 'password123',
            'HoTen' => 'Naömi_Westerhof',
            'NgaySinh' => '1958-12-06 15:09:13',
            'GioiTinh' => 0,
            'DiaChi' => 'De Borstelmaker, Vreeswijk, Netherlands',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/90.jpg',
            'remember_token' => NULL,
            'created_at' => '2008-09-25 20:40:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 54,
            'Username' => 'blueleopard929',
            'Email' => 'ulf.nagel@example.com',
            'Phone' => '0492-1373598',
            'MatKhau' => 'password123',
            'HoTen' => 'Ulf_Nagel',
            'NgaySinh' => '1944-12-30 13:09:35',
            'GioiTinh' => 1,
            'DiaChi' => 'Grüner Weg, Barmstedt, Germany',
            'HinhAnh' => 'https://randomuser.me/api/portraits/men/93.jpg',
            'remember_token' => NULL,
            'created_at' => '2000-07-25 04:25:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 55,
            'Username' => 'whitemeercat301',
            'Email' => 'tilde.rasmussen@example.com',
            'Phone' => '90306008',
            'MatKhau' => 'password123',
            'HoTen' => 'Tilde_Rasmussen',
            'NgaySinh' => '1954-11-25 03:00:34',
            'GioiTinh' => 0,
            'DiaChi' => 'Egevangen, København Ø, Denmark',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/1.jpg',
            'remember_token' => NULL,
            'created_at' => '2006-08-13 15:07:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Khachhang::create([
            'id' => 56,
            'Username' => 'tinyelephant830',
            'Email' => 'rebekka.schie@example.com',
            'Phone' => '65371361',
            'MatKhau' => 'password123',
            'HoTen' => 'Rebekka_Schie',
            'NgaySinh' => '1966-09-24 20:57:08',
            'GioiTinh' => 0,
            'DiaChi' => 'Lachmanns vei, Skarnes, Norway',
            'HinhAnh' => 'https://randomuser.me/api/portraits/women/9.jpg',
            'remember_token' => NULL,
            'created_at' => '2001-05-21 21:17:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Hangsanxuat::create([
            'id' => 1,
            'Ten' => 'Cannon',
            'DiaChi' => 'V2, Lê Thị Riêng, Hà Nam',
            'Email' => 'Cannon@gmail.com',
            'Phone' => '0468343337',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 2,
            'Ten' => 'IPhone',
            'DiaChi' => 'N3, Hoàng Sa, Tây Ninh',
            'Email' => 'IPhone@gmail.com',
            'Phone' => '0868562476',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 3,
            'Ten' => 'Xiaomi',
            'DiaChi' => 'Z7, Lê Thánh Tôn, Lào Cai',
            'Email' => 'Xiaomi@gmail.com',
            'Phone' => '0727834458',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 4,
            'Ten' => 'SaNaKy',
            'DiaChi' => 'E4, Lê Anh Xuân, Phú Yên',
            'Email' => 'SaNaKy@gmail.com',
            'Phone' => '0219680334',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 5,
            'Ten' => 'SONY',
            'DiaChi' => 'V2, Lê Thị Riêng, Hà Nam',
            'Email' => 'SONY@gmail.com',
            'Phone' => '0124108053',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 6,
            'Ten' => 'SamSung',
            'DiaChi' => 'M8, Nguyễn Cư Trinh, Lai Châu',
            'Email' => 'SamSung@gmail.com',
            'Phone' => '0487862068',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 7,
            'Ten' => 'ViVo',
            'DiaChi' => 'R1, Lê Công Kiều, Hải Phòng',
            'Email' => 'ViVo@gmail.com',
            'Phone' => '0912247804',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 8,
            'Ten' => 'Electrolux',
            'DiaChi' => 'F3, Nguyễn Cảnh Chân, Khánh Hòa',
            'Email' => 'Electrolux@gmail.com',
            'Phone' => '0316892771',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 9,
            'Ten' => 'LG',
            'DiaChi' => 'N1, Nam Quốc Cang, Nam Định',
            'Email' => 'LG@gmail.com',
            'Phone' => '0233681010',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 10,
            'Ten' => 'Toshiba',
            'DiaChi' => 'J4, Calmette, Hà Nam',
            'Email' => 'Toshiba@gmail.com',
            'Phone' => '0268628820',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 11,
            'Ten' => 'Acer',
            'DiaChi' => 'F9, Nguyễn Hữu Cầu, Cao Bằng',
            'Email' => 'Acer@gmail.com',
            'Phone' => '0883771752',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hangsanxuat::create([
            'id' => 12,
            'Ten' => 'ASUS',
            'DiaChi' => 'H6, Huỳnh Khương Ninh, Hà Tĩnh',
            'Email' => 'ASUS@gmail.com',
            'Phone' => '0135349672',
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
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

        Sanpham::create([
            'id' => 1,
            'TenSanPham' => 'Xiaomi Redmi Note 6 Pro30',
            'MoTa' => '64GB',
            'SoLuongTon' => 10,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
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
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
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
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
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
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
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
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
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
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
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
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
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
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
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
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
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
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
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
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
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
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
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
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
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
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
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
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
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
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
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
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
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
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
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
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
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
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
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
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
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
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
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
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
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
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
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
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
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
            'GiaNhap' => 40000,
            'GiaBan' => 50000,
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
            'GiaNhap' => 60000,
            'GiaBan' => 70000,
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
            'GiaNhap' => 150000,
            'GiaBan' => 160000,
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
            'GiaNhap' => 40000,
            'GiaBan' => 50000,
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
            'GiaNhap' => 90000,
            'GiaBan' => 100000,
            'HinhAnh' => 'SP_5.jpg',
            'LuotMua' => 7,
            'HangSanXuatId' => 12,
            'LoaiSanPhamId' => 6,
            'created_at' => '2022-12-21 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
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
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 28,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 29,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 30,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 31,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 32,
            'GiamGia' => 5000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 23,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 24,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 25,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
            'ChuongTrinhKhuyenMaiId' => 1,
            'SanPhamId' => 26,
            'GiamGia' => 10000,
            'SoLuong' => 0,
            'created_at' => '2021-11-20 17:00:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CTChuongTrinhKM::create([
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
        Diachi::create([
            'id' => 1,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Hồ Huấn Nghiệp',
            'Phone' => '0618431768',
            'DiaChiChiTiet' => 'J5, Nguyễn Hữu Cầu, Thanh Hóa',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 2,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Hàm Nghi',
            'Phone' => '0452803292',
            'DiaChiChiTiet' => 'D4, Huỳnh Khương Ninh, Tiền Giang',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 3,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Hồ Tùng Mậu',
            'Phone' => '0566425150',
            'DiaChiChiTiet' => 'P1, Bùi Viện, Hải Phòng',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 4,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Nguyễn Cư Trinh',
            'Phone' => '0982099712',
            'DiaChiChiTiet' => 'W7, Mai Thị Lựu, Trà Vinh',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 5,
            'KhachHangId' => 5,
            'TenNguoiNhan' => 'Bùi Viện',
            'Phone' => '0333641834',
            'DiaChiChiTiet' => 'D3, Nam Quốc Cang, Bình Định',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 6,
            'KhachHangId' => 6,
            'TenNguoiNhan' => 'Eva_Brunet',
            'Phone' => '01-70-39-10-88',
            'DiaChiChiTiet' => 'Rue Barrier, Rouen, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 7,
            'KhachHangId' => 7,
            'TenNguoiNhan' => 'Tristan_Møller',
            'Phone' => '16961009',
            'DiaChiChiTiet' => 'Græsvangen, Sønder Stenderup, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 8,
            'KhachHangId' => 8,
            'TenNguoiNhan' => 'Anselm_Abel',
            'Phone' => '0497-4150057',
            'DiaChiChiTiet' => 'Ahornweg, Markkleeberg, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 9,
            'KhachHangId' => 9,
            'TenNguoiNhan' => 'Isabelle_Baker',
            'Phone' => '021-635-8296',
            'DiaChiChiTiet' => 'New Street, Dungarvan, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 10,
            'KhachHangId' => 10,
            'TenNguoiNhan' => 'Selma_Rasmussen',
            'Phone' => '99854271',
            'DiaChiChiTiet' => 'Skovstjernevej, Viby Sj., Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 11,
            'KhachHangId' => 11,
            'TenNguoiNhan' => 'Xavier_Smith',
            'Phone' => '(170)-823-5752',
            'DiaChiChiTiet' => 'Mt Eden Road, Tauranga, New Zealand',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 12,
            'KhachHangId' => 12,
            'TenNguoiNhan' => 'Dilano_De Groen',
            'Phone' => '(489)-330-0847',
            'DiaChiChiTiet' => 'Duykerdam, Ens, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 13,
            'KhachHangId' => 13,
            'TenNguoiNhan' => 'Jaime_Cano',
            'Phone' => '947-024-220',
            'DiaChiChiTiet' => 'Paseo de Extremadura, Santa Cruz de Tenerife, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 14,
            'KhachHangId' => 14,
            'TenNguoiNhan' => 'Selami_Van Leeuwe',
            'Phone' => '(607)-530-6761',
            'DiaChiChiTiet' => 'Koppertjesland, Sint Jansteen, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 15,
            'KhachHangId' => 15,
            'TenNguoiNhan' => 'Arianna_Mendoza',
            'Phone' => '01-5137-4415',
            'DiaChiChiTiet' => 'Homestead Rd, Busselton, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 16,
            'KhachHangId' => 16,
            'TenNguoiNhan' => 'Monsieur.Halil_Denis',
            'Phone' => '076 624 70 22',
            'DiaChiChiTiet' => 'Rue de LAbbé-Roger-Derry, Thusis, Switzerland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 17,
            'KhachHangId' => 17,
            'TenNguoiNhan' => 'Winfried_Böck',
            'Phone' => '0455-7981435',
            'DiaChiChiTiet' => 'Birkenweg, Pausa-Mühltroff, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 18,
            'KhachHangId' => 18,
            'TenNguoiNhan' => 'Grace_Stanley',
            'Phone' => '015396 56883',
            'DiaChiChiTiet' => 'Manor Road, Portsmouth, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 19,
            'KhachHangId' => 19,
            'TenNguoiNhan' => 'Ravn_Bore',
            'Phone' => '70326619',
            'DiaChiChiTiet' => 'Valmueveien, Valestrandfossen, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 20,
            'KhachHangId' => 20,
            'TenNguoiNhan' => 'Gina_Evans',
            'Phone' => '(042)-015-6700',
            'DiaChiChiTiet' => 'Mcgowen St, Saint Paul, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 21,
            'KhachHangId' => 21,
            'TenNguoiNhan' => 'Yvete_Martins',
            'Phone' => '(81) 3896-1502',
            'DiaChiChiTiet' => 'Travessa dos Martírios, Rio Branco, Brazil',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 22,
            'KhachHangId' => 22,
            'TenNguoiNhan' => 'Lucas_Johnston',
            'Phone' => '01-9246-8431',
            'DiaChiChiTiet' => 'Robinson Rd, Warragul, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 23,
            'KhachHangId' => 23,
            'TenNguoiNhan' => 'Jose_Ortega',
            'Phone' => '962-099-714',
            'DiaChiChiTiet' => 'Calle de Alcalá, Mérida, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 24,
            'KhachHangId' => 24,
            'TenNguoiNhan' => 'Monsieur.Noah_Fabre',
            'Phone' => '077 454 37 76',
            'DiaChiChiTiet' => 'Place du 8 Novembre 1942, Saanen, Switzerland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 25,
            'KhachHangId' => 25,
            'TenNguoiNhan' => 'Kayla_Powell',
            'Phone' => '011-887-3410',
            'DiaChiChiTiet' => 'Rookery Road, Balbriggan, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 26,
            'KhachHangId' => 26,
            'TenNguoiNhan' => 'Necati_Yıldırım',
            'Phone' => '(044)-771-1565',
            'DiaChiChiTiet' => 'Kushimoto Sk, Çorum, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 27,
            'KhachHangId' => 27,
            'TenNguoiNhan' => 'Murat_Başoğlu',
            'Phone' => '(417)-493-7694',
            'DiaChiChiTiet' => 'Mevlana Cd, Erzurum, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 28,
            'KhachHangId' => 28,
            'TenNguoiNhan' => 'اميرعلي_پارسا',
            'Phone' => '058-72469339',
            'DiaChiChiTiet' => 'آفریقا, خوی, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 29,
            'KhachHangId' => 29,
            'TenNguoiNhan' => 'Lise_Giraud',
            'Phone' => '01-34-48-10-18',
            'DiaChiChiTiet' => 'Rue Paul Bert, Aulnay-sous-Bois, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 30,
            'KhachHangId' => 30,
            'TenNguoiNhan' => 'عرشيا_قاسمی',
            'Phone' => '038-68498535',
            'DiaChiChiTiet' => 'استاد قریب, ساوه, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 31,
            'KhachHangId' => 31,
            'TenNguoiNhan' => 'Emma_Ross',
            'Phone' => '193-837-2560',
            'DiaChiChiTiet' => 'Dundas Rd, Russell, Canada',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 32,
            'KhachHangId' => 32,
            'TenNguoiNhan' => 'Antonia_Gallego',
            'Phone' => '997-476-306',
            'DiaChiChiTiet' => 'Calle del Pez, Almería, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 33,
            'KhachHangId' => 33,
            'TenNguoiNhan' => 'شایان_سالاری',
            'Phone' => '046-43829717',
            'DiaChiChiTiet' => 'آیت الله طالقانی, سنندج, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 34,
            'KhachHangId' => 34,
            'TenNguoiNhan' => 'Zachary_Willis',
            'Phone' => '041-970-5705',
            'DiaChiChiTiet' => 'Albert Road, Tralee, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 35,
            'KhachHangId' => 35,
            'TenNguoiNhan' => 'Erica_Morgan',
            'Phone' => '(507)-002-2277',
            'DiaChiChiTiet' => 'Samaritan Dr, Aubrey, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 36,
            'KhachHangId' => 36,
            'TenNguoiNhan' => 'Jaylen_Van der Zwaan',
            'Phone' => '(534)-286-1389',
            'DiaChiChiTiet' => 'Clioplein, Overloon, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 37,
            'KhachHangId' => 37,
            'TenNguoiNhan' => 'Adèle_Joly',
            'Phone' => '02-43-99-12-72',
            'DiaChiChiTiet' => 'Rue Abel-Hovelacque, Nancy, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 38,
            'KhachHangId' => 38,
            'TenNguoiNhan' => 'Ruben_Clarke',
            'Phone' => '017684 44529',
            'DiaChiChiTiet' => 'Mill Lane, St Davids, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 39,
            'KhachHangId' => 39,
            'TenNguoiNhan' => 'Lilou_Perrin',
            'Phone' => '05-83-43-99-24',
            'DiaChiChiTiet' => 'Boulevard de la Duchère, Saint-Pierre, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 40,
            'KhachHangId' => 40,
            'TenNguoiNhan' => 'کیمیا_كامياران',
            'Phone' => '092-03645982',
            'DiaChiChiTiet' => 'میدان امام خمینی, تبریز, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 41,
            'KhachHangId' => 41,
            'TenNguoiNhan' => 'Tale_Smestad',
            'Phone' => '57356215',
            'DiaChiChiTiet' => 'Langbølgen, Sørland, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 42,
            'KhachHangId' => 42,
            'TenNguoiNhan' => 'Alexis_Chan',
            'Phone' => '757-179-0206',
            'DiaChiChiTiet' => 'Pine Rd, Stirling, Canada',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 43,
            'KhachHangId' => 43,
            'TenNguoiNhan' => 'Malou_Nielsen',
            'Phone' => '96787914',
            'DiaChiChiTiet' => 'Buen, Assens, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 44,
            'KhachHangId' => 44,
            'TenNguoiNhan' => 'Gül_Günday',
            'Phone' => '(420)-339-4996',
            'DiaChiChiTiet' => 'Fatih Sultan Mehmet Cd, Kayseri, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 45,
            'KhachHangId' => 45,
            'TenNguoiNhan' => 'آوین_کریمی',
            'Phone' => '090-89999548',
            'DiaChiChiTiet' => 'آیت الله مدرس, زاهدان, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 46,
            'KhachHangId' => 46,
            'TenNguoiNhan' => 'Dora_Sullivan',
            'Phone' => '(954)-636-3855',
            'DiaChiChiTiet' => 'Wycliff Ave, Stockton, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 47,
            'KhachHangId' => 47,
            'TenNguoiNhan' => 'Stephanie_Ross',
            'Phone' => '051-945-8379',
            'DiaChiChiTiet' => 'The Drive, Roscommon, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 48,
            'KhachHangId' => 48,
            'TenNguoiNhan' => 'Serenity_Mccoy',
            'Phone' => '01-2775-8588',
            'DiaChiChiTiet' => 'E North St, Bendigo, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 49,
            'KhachHangId' => 49,
            'TenNguoiNhan' => 'Luz_Arias',
            'Phone' => '938-354-983',
            'DiaChiChiTiet' => 'Paseo de Zorrilla, Alcobendas, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 50,
            'KhachHangId' => 50,
            'TenNguoiNhan' => 'Storm_Larsen',
            'Phone' => '85506086',
            'DiaChiChiTiet' => 'Søvænget, Jerslev Sj, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 51,
            'KhachHangId' => 51,
            'TenNguoiNhan' => 'Lila_Pierre',
            'Phone' => '04-00-84-09-54',
            'DiaChiChiTiet' => 'Rue Dugas-Montbel, Orléans, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 52,
            'KhachHangId' => 52,
            'TenNguoiNhan' => 'Wayne_Rhodes',
            'Phone' => '015396 72883',
            'DiaChiChiTiet' => 'Station Road, Leicester, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 53,
            'KhachHangId' => 53,
            'TenNguoiNhan' => 'Naömi_Westerhof',
            'Phone' => '(485)-591-8578',
            'DiaChiChiTiet' => 'De Borstelmaker, Vreeswijk, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 54,
            'KhachHangId' => 54,
            'TenNguoiNhan' => 'Ulf_Nagel',
            'Phone' => '0492-1373598',
            'DiaChiChiTiet' => 'Grüner Weg, Barmstedt, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 55,
            'KhachHangId' => 55,
            'TenNguoiNhan' => 'Tilde_Rasmussen',
            'Phone' => '90306008',
            'DiaChiChiTiet' => 'Egevangen, København Ø, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 56,
            'KhachHangId' => 56,
            'TenNguoiNhan' => 'Rebekka_Schie',
            'Phone' => '65371361',
            'DiaChiChiTiet' => 'Lachmanns vei, Skarnes, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 64,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'CodePhuongXa' => 27595,
            'CodeQuanHuyen' => 785,
            'CodeTinhThanhPho' => 79,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 65,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'PhuongXa' => 'Phường Thượng Thanh',
            'QuanHuyen' => 'Quận Long Biên',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'CodePhuongXa' => 115,
            'CodeQuanHuyen' => 4,
            'CodeTinhThanhPho' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 66,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'CodePhuongXa' => 27595,
            'CodeQuanHuyen' => 785,
            'CodeTinhThanhPho' => 79,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 67,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'PhuongXa' => 'Phường Thượng Thanh',
            'QuanHuyen' => 'Quận Long Biên',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'CodePhuongXa' => 115,
            'CodeQuanHuyen' => 4,
            'CodeTinhThanhPho' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Hoadon::create([
            'id' => 1,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 12,
            'TongTien' => 72180000,
            'TrangThai' => '3',
            'created_at' => '2015-08-17 04:06:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 2,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 12,
            'TongTien' => 88155000,
            'TrangThai' => '1',
            'created_at' => '2019-09-16 17:55:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 3,
            'DiaChiId' => 10,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 107000000,
            'TrangThai' => '2',
            'created_at' => '2016-03-21 11:49:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 4,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 85280000,
            'TrangThai' => '2',
            'created_at' => '2018-10-03 20:12:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 5,
            'DiaChiId' => 64,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 5,
            'TongTien' => 28000000,
            'TrangThai' => '2',
            'created_at' => '2016-09-09 09:04:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 6,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 17,
            'TongTien' => 159000000,
            'TrangThai' => '5',
            'created_at' => '2019-03-21 01:04:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 7,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 1,
            'TongTien' => 6000000,
            'TrangThai' => '4',
            'created_at' => '2015-04-14 08:07:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 8,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 7,
            'TongTien' => 94000000,
            'TrangThai' => '3',
            'created_at' => '2016-10-10 12:04:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 9,
            'DiaChiId' => 42,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 17,
            'TongTien' => 140000000,
            'TrangThai' => '3',
            'created_at' => '2017-10-05 17:32:56',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 10,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 19,
            'TongTien' => 131180000,
            'TrangThai' => '1',
            'created_at' => '2016-12-16 16:25:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 11,
            'DiaChiId' => 64,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => '1',
            'created_at' => '2019-09-03 14:38:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 12,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 23,
            'TongTien' => 136325000,
            'TrangThai' => '1',
            'created_at' => '2015-05-10 10:18:04',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 13,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 28,
            'TongTien' => 231300000,
            'TrangThai' => '1',
            'created_at' => '2017-01-30 20:22:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 14,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 19,
            'TongTien' => 93175000,
            'TrangThai' => '3',
            'created_at' => '2016-02-07 04:18:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 15,
            'DiaChiId' => 41,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 149000000,
            'TrangThai' => '5',
            'created_at' => '2017-04-01 23:06:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 16,
            'DiaChiId' => 18,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 24,
            'TongTien' => 145405000,
            'TrangThai' => '5',
            'created_at' => '2017-03-02 02:08:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 17,
            'DiaChiId' => 46,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 6,
            'TongTien' => 14260000,
            'TrangThai' => '1',
            'created_at' => '2015-06-30 01:54:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 18,
            'DiaChiId' => 6,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 12,
            'TongTien' => 122045000,
            'TrangThai' => '3',
            'created_at' => '2016-08-05 08:03:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 19,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 19,
            'TongTien' => 104005000,
            'TrangThai' => '4',
            'created_at' => '2015-08-24 06:58:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 20,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 16,
            'TongTien' => 91185000,
            'TrangThai' => '2',
            'created_at' => '2016-02-12 02:06:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 21,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 11,
            'TongTien' => 68755000,
            'TrangThai' => '2',
            'created_at' => '2018-11-09 10:19:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 22,
            'DiaChiId' => 12,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 70455000,
            'TrangThai' => '3',
            'created_at' => '2016-06-27 12:20:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 23,
            'DiaChiId' => 8,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 128970000,
            'TrangThai' => '5',
            'created_at' => '2015-12-01 16:28:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 24,
            'DiaChiId' => 38,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 9,
            'TongTien' => 88980000,
            'TrangThai' => '1',
            'created_at' => '2016-01-05 11:11:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 25,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 20,
            'TongTien' => 102475000,
            'TrangThai' => '5',
            'created_at' => '2019-01-31 00:46:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 26,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 12,
            'TongTien' => 41755000,
            'TrangThai' => '5',
            'created_at' => '2019-07-25 01:29:40',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 27,
            'DiaChiId' => 36,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 29,
            'TongTien' => 285880000,
            'TrangThai' => '5',
            'created_at' => '2015-01-09 12:01:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 28,
            'DiaChiId' => 16,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 6,
            'TongTien' => 32000000,
            'TrangThai' => '2',
            'created_at' => '2016-06-02 09:07:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 29,
            'DiaChiId' => 14,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 171955000,
            'TrangThai' => '5',
            'created_at' => '2017-04-23 21:43:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 30,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 14,
            'TongTien' => 78940000,
            'TrangThai' => '4',
            'created_at' => '2018-11-14 23:25:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 31,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 17,
            'TongTien' => 182000000,
            'TrangThai' => '3',
            'created_at' => '2016-04-14 04:29:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 32,
            'DiaChiId' => 28,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 17,
            'TongTien' => 110180000,
            'TrangThai' => '4',
            'created_at' => '2018-12-12 12:37:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 33,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 19,
            'TongTien' => 144195000,
            'TrangThai' => '1',
            'created_at' => '2019-01-26 12:15:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 34,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 115980000,
            'TrangThai' => '3',
            'created_at' => '2019-12-25 02:15:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 35,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 14,
            'TongTien' => 96620000,
            'TrangThai' => '1',
            'created_at' => '2016-03-17 10:29:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 36,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 18,
            'TongTien' => 187910000,
            'TrangThai' => '3',
            'created_at' => '2019-11-22 19:24:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 37,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 113000000,
            'TrangThai' => '1',
            'created_at' => '2018-12-09 11:51:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 38,
            'DiaChiId' => 9,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 8,
            'TongTien' => 47045000,
            'TrangThai' => '5',
            'created_at' => '2018-08-25 17:09:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 39,
            'DiaChiId' => 15,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 131960000,
            'TrangThai' => '1',
            'created_at' => '2016-07-29 08:40:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 40,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 19,
            'TongTien' => 122395000,
            'TrangThai' => '4',
            'created_at' => '2016-04-21 11:23:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 41,
            'DiaChiId' => 38,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 16,
            'TongTien' => 46030000,
            'TrangThai' => '1',
            'created_at' => '2019-08-12 02:25:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 42,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 11,
            'TongTien' => 85940000,
            'TrangThai' => '4',
            'created_at' => '2018-11-15 17:37:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 43,
            'DiaChiId' => 17,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 27,
            'TongTien' => 218425000,
            'TrangThai' => '1',
            'created_at' => '2018-10-27 12:04:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 44,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 15,
            'TongTien' => 106095000,
            'TrangThai' => '5',
            'created_at' => '2015-06-27 21:31:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 45,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 14,
            'TongTien' => 43225000,
            'TrangThai' => '4',
            'created_at' => '2016-03-26 19:25:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 46,
            'DiaChiId' => 52,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 17,
            'TongTien' => 84620000,
            'TrangThai' => '5',
            'created_at' => '2019-08-30 23:05:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 47,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 26,
            'TongTien' => 284950000,
            'TrangThai' => '3',
            'created_at' => '2016-07-06 20:56:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 48,
            'DiaChiId' => 50,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 39320000,
            'TrangThai' => '5',
            'created_at' => '2019-06-14 22:42:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 49,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 22,
            'TongTien' => 97740000,
            'TrangThai' => '3',
            'created_at' => '2019-01-14 02:38:31',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 50,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 4,
            'TongTien' => 21980000,
            'TrangThai' => '3',
            'created_at' => '2017-09-03 20:22:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 51,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 15,
            'TongTien' => 118260000,
            'TrangThai' => '2',
            'created_at' => '2018-05-23 13:16:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 52,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 16,
            'TongTien' => 131045000,
            'TrangThai' => '4',
            'created_at' => '2017-05-11 18:30:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 53,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 8,
            'TongTien' => 12380000,
            'TrangThai' => '5',
            'created_at' => '2015-03-01 18:59:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 54,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 23,
            'TongTien' => 184745000,
            'TrangThai' => '5',
            'created_at' => '2019-03-21 07:53:26',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 55,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 9,
            'TongTien' => 109000000,
            'TrangThai' => '1',
            'created_at' => '2017-01-04 09:28:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 56,
            'DiaChiId' => 54,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 17,
            'TongTien' => 115325000,
            'TrangThai' => '1',
            'created_at' => '2016-03-21 12:56:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 57,
            'DiaChiId' => 47,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 24,
            'TongTien' => 107060000,
            'TrangThai' => '5',
            'created_at' => '2016-05-31 19:55:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 58,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 7,
            'TongTien' => 75000000,
            'TrangThai' => '1',
            'created_at' => '2019-09-07 20:17:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 59,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 5,
            'TongTien' => 16135000,
            'TrangThai' => '1',
            'created_at' => '2015-03-10 18:36:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 60,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 19,
            'TongTien' => 160230000,
            'TrangThai' => '3',
            'created_at' => '2015-03-29 08:52:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 61,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 6,
            'TongTien' => 41980000,
            'TrangThai' => '5',
            'created_at' => '2019-11-13 07:58:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 62,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 9,
            'TongTien' => 65260000,
            'TrangThai' => '4',
            'created_at' => '2018-09-30 02:04:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 63,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 7,
            'TongTien' => 50990000,
            'TrangThai' => '2',
            'created_at' => '2018-04-11 02:49:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 64,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 14,
            'TongTien' => 134285000,
            'TrangThai' => '5',
            'created_at' => '2018-12-01 12:45:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 65,
            'DiaChiId' => 48,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 16,
            'TongTien' => 183000000,
            'TrangThai' => '5',
            'created_at' => '2016-08-03 16:46:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 66,
            'DiaChiId' => 20,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 140000000,
            'TrangThai' => '4',
            'created_at' => '2016-01-27 21:20:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 67,
            'DiaChiId' => 32,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 234950000,
            'TrangThai' => '1',
            'created_at' => '2017-05-11 21:53:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 68,
            'DiaChiId' => 21,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 88895000,
            'TrangThai' => '1',
            'created_at' => '2018-12-27 00:31:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 69,
            'DiaChiId' => 41,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 835000,
            'TrangThai' => '5',
            'created_at' => '2016-08-01 02:22:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 70,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 17,
            'TongTien' => 111220000,
            'TrangThai' => '3',
            'created_at' => '2017-01-07 07:54:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 71,
            'DiaChiId' => 23,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 18,
            'TongTien' => 170085000,
            'TrangThai' => '2',
            'created_at' => '2016-06-10 20:58:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 72,
            'DiaChiId' => 51,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 112000000,
            'TrangThai' => '4',
            'created_at' => '2019-02-04 13:01:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 73,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 38,
            'TongTien' => 301420000,
            'TrangThai' => '2',
            'created_at' => '2019-01-27 06:19:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 74,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 23,
            'TongTien' => 240000000,
            'TrangThai' => '5',
            'created_at' => '2015-05-02 13:01:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 75,
            'DiaChiId' => 48,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 4,
            'TongTien' => 15980000,
            'TrangThai' => '4',
            'created_at' => '2017-06-01 11:59:32',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 76,
            'DiaChiId' => 20,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 17,
            'TongTien' => 115085000,
            'TrangThai' => '1',
            'created_at' => '2015-04-18 08:11:41',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 77,
            'DiaChiId' => 67,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 26,
            'TongTien' => 254950000,
            'TrangThai' => '5',
            'created_at' => '2019-04-19 07:37:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 78,
            'DiaChiId' => 15,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 18,
            'TongTien' => 168000000,
            'TrangThai' => '1',
            'created_at' => '2018-04-30 07:10:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 79,
            'DiaChiId' => 53,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 15,
            'TongTien' => 103240000,
            'TrangThai' => '3',
            'created_at' => '2017-03-30 11:41:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 80,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 11,
            'TongTien' => 79380000,
            'TrangThai' => '1',
            'created_at' => '2017-07-22 13:49:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 81,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 12,
            'TongTien' => 58145000,
            'TrangThai' => '3',
            'created_at' => '2019-06-02 21:49:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 82,
            'DiaChiId' => 32,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 25,
            'TongTien' => 155505000,
            'TrangThai' => '3',
            'created_at' => '2016-03-31 05:58:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 83,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 194900000,
            'TrangThai' => '5',
            'created_at' => '2019-04-01 23:25:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 84,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 26,
            'TongTien' => 202940000,
            'TrangThai' => '3',
            'created_at' => '2016-01-10 22:49:12',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 85,
            'DiaChiId' => 54,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 18,
            'TongTien' => 101920000,
            'TrangThai' => '5',
            'created_at' => '2018-02-09 04:37:07',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 86,
            'DiaChiId' => 31,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 16,
            'TongTien' => 124940000,
            'TrangThai' => '2',
            'created_at' => '2017-09-27 09:41:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 87,
            'DiaChiId' => 16,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 5,
            'TongTien' => 23000000,
            'TrangThai' => '2',
            'created_at' => '2015-02-20 07:36:54',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 88,
            'DiaChiId' => 46,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 10,
            'TongTien' => 45240000,
            'TrangThai' => '4',
            'created_at' => '2018-06-29 16:32:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 89,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 36,
            'TongTien' => 328550000,
            'TrangThai' => '4',
            'created_at' => '2017-01-01 03:51:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 90,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 75045000,
            'TrangThai' => '2',
            'created_at' => '2015-10-13 07:01:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 91,
            'DiaChiId' => 9,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 25,
            'TongTien' => 144005000,
            'TrangThai' => '5',
            'created_at' => '2018-04-28 12:54:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 92,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 11,
            'TongTien' => 86065000,
            'TrangThai' => '5',
            'created_at' => '2017-01-13 15:09:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 93,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 99995000,
            'TrangThai' => '5',
            'created_at' => '2018-01-13 20:15:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 94,
            'DiaChiId' => 6,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 81970000,
            'TrangThai' => '5',
            'created_at' => '2016-11-23 12:04:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 95,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 18,
            'TongTien' => 103255000,
            'TrangThai' => '2',
            'created_at' => '2017-09-27 00:19:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 96,
            'DiaChiId' => 8,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 21,
            'TongTien' => 108130000,
            'TrangThai' => '5',
            'created_at' => '2016-01-21 03:21:12',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 97,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 6,
            'TongTien' => 41155000,
            'TrangThai' => '4',
            'created_at' => '2018-04-27 07:44:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 98,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 59000000,
            'TrangThai' => '1',
            'created_at' => '2016-09-25 05:17:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 99,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 27,
            'TongTien' => 171380000,
            'TrangThai' => '1',
            'created_at' => '2016-05-20 13:28:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 100,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => '3',
            'created_at' => '2019-03-20 11:11:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        CT_HoaDon::create([
            'id' => 1,
            'HoaDonId' => 92,
            'SanPhamId' => 24,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 2,
            'HoaDonId' => 16,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 3,
            'HoaDonId' => 33,
            'SanPhamId' => 16,
            'SoLuong' => 1,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 9000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 4,
            'HoaDonId' => 80,
            'SanPhamId' => 19,
            'SoLuong' => 2,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 5,
            'HoaDonId' => 63,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 6,
            'HoaDonId' => 39,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 7,
            'HoaDonId' => 49,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 8,
            'HoaDonId' => 67,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 9,
            'HoaDonId' => 38,
            'SanPhamId' => 31,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 10,
            'HoaDonId' => 35,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 11,
            'HoaDonId' => 96,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 12,
            'HoaDonId' => 71,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 13,
            'HoaDonId' => 80,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 14,
            'HoaDonId' => 73,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 15,
            'HoaDonId' => 65,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 16,
            'HoaDonId' => 19,
            'SanPhamId' => 25,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 17,
            'HoaDonId' => 84,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 18,
            'HoaDonId' => 23,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 19,
            'HoaDonId' => 59,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 20,
            'HoaDonId' => 72,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 21,
            'HoaDonId' => 62,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 22,
            'HoaDonId' => 21,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 23,
            'HoaDonId' => 92,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 24,
            'HoaDonId' => 20,
            'SanPhamId' => 19,
            'SoLuong' => 2,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 25,
            'HoaDonId' => 4,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 310000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 26,
            'HoaDonId' => 66,
            'SanPhamId' => 18,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 27,
            'HoaDonId' => 42,
            'SanPhamId' => 16,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 28,
            'HoaDonId' => 89,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 29,
            'HoaDonId' => 71,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 30,
            'HoaDonId' => 40,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 31,
            'HoaDonId' => 10,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 32,
            'HoaDonId' => 12,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 33,
            'HoaDonId' => 80,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 34,
            'HoaDonId' => 81,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 35,
            'HoaDonId' => 16,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 36,
            'HoaDonId' => 42,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 37,
            'HoaDonId' => 13,
            'SanPhamId' => 28,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 38,
            'HoaDonId' => 43,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 39,
            'HoaDonId' => 81,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 40,
            'HoaDonId' => 86,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 41,
            'HoaDonId' => 67,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 42,
            'HoaDonId' => 65,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 43,
            'HoaDonId' => 20,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 44,
            'HoaDonId' => 16,
            'SanPhamId' => 13,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 45,
            'HoaDonId' => 13,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 46,
            'HoaDonId' => 67,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 47,
            'HoaDonId' => 99,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 48,
            'HoaDonId' => 46,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 49,
            'HoaDonId' => 73,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 50,
            'HoaDonId' => 68,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 51,
            'HoaDonId' => 29,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 52,
            'HoaDonId' => 84,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 53,
            'HoaDonId' => 29,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 54,
            'HoaDonId' => 26,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 55,
            'HoaDonId' => 68,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 56,
            'HoaDonId' => 36,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 57,
            'HoaDonId' => 49,
            'SanPhamId' => 29,
            'SoLuong' => 1,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 58,
            'HoaDonId' => 89,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 59,
            'HoaDonId' => 72,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 60,
            'HoaDonId' => 77,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 61,
            'HoaDonId' => 14,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 62,
            'HoaDonId' => 43,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 63,
            'HoaDonId' => 30,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 64,
            'HoaDonId' => 74,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 65,
            'HoaDonId' => 96,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 66,
            'HoaDonId' => 27,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 67,
            'HoaDonId' => 85,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 68,
            'HoaDonId' => 3,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 69,
            'HoaDonId' => 31,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 70,
            'HoaDonId' => 90,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 71,
            'HoaDonId' => 73,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 72,
            'HoaDonId' => 93,
            'SanPhamId' => 31,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 73,
            'HoaDonId' => 58,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 74,
            'HoaDonId' => 81,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 75,
            'HoaDonId' => 60,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 76,
            'HoaDonId' => 58,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 77,
            'HoaDonId' => 19,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 78,
            'HoaDonId' => 90,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 79,
            'HoaDonId' => 40,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 80,
            'HoaDonId' => 41,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 81,
            'HoaDonId' => 33,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 82,
            'HoaDonId' => 76,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 83,
            'HoaDonId' => 51,
            'SanPhamId' => 8,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 84,
            'HoaDonId' => 87,
            'SanPhamId' => 5,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 85,
            'HoaDonId' => 60,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 86,
            'HoaDonId' => 55,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 87,
            'HoaDonId' => 90,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 88,
            'HoaDonId' => 64,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 89,
            'HoaDonId' => 36,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 90,
            'HoaDonId' => 47,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 91,
            'HoaDonId' => 43,
            'SanPhamId' => 18,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 92,
            'HoaDonId' => 55,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 93,
            'HoaDonId' => 95,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 94,
            'HoaDonId' => 32,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 95,
            'HoaDonId' => 6,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 96,
            'HoaDonId' => 68,
            'SanPhamId' => 16,
            'SoLuong' => 1,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 9000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 97,
            'HoaDonId' => 13,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 98,
            'HoaDonId' => 1,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 99,
            'HoaDonId' => 37,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 100,
            'HoaDonId' => 94,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 101,
            'HoaDonId' => 89,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 102,
            'HoaDonId' => 54,
            'SanPhamId' => 23,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 12990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 103,
            'HoaDonId' => 31,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 104,
            'HoaDonId' => 82,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 105,
            'HoaDonId' => 80,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 380000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 106,
            'HoaDonId' => 78,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 107,
            'HoaDonId' => 12,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 108,
            'HoaDonId' => 89,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 109,
            'HoaDonId' => 9,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 110,
            'HoaDonId' => 3,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 111,
            'HoaDonId' => 73,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 112,
            'HoaDonId' => 92,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 113,
            'HoaDonId' => 27,
            'SanPhamId' => 18,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 114,
            'HoaDonId' => 35,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 115,
            'HoaDonId' => 17,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 116,
            'HoaDonId' => 82,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 117,
            'HoaDonId' => 91,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 118,
            'HoaDonId' => 85,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 119,
            'HoaDonId' => 71,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 120,
            'HoaDonId' => 9,
            'SanPhamId' => 22,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 121,
            'HoaDonId' => 49,
            'SanPhamId' => 25,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 122,
            'HoaDonId' => 91,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 123,
            'HoaDonId' => 18,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 124,
            'HoaDonId' => 42,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 125,
            'HoaDonId' => 23,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 126,
            'HoaDonId' => 8,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 127,
            'HoaDonId' => 75,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 128,
            'HoaDonId' => 45,
            'SanPhamId' => 6,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 129,
            'HoaDonId' => 77,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 130,
            'HoaDonId' => 46,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 131,
            'HoaDonId' => 9,
            'SanPhamId' => 18,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 132,
            'HoaDonId' => 49,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 133,
            'HoaDonId' => 34,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 134,
            'HoaDonId' => 81,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 135,
            'HoaDonId' => 84,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 136,
            'HoaDonId' => 40,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 137,
            'HoaDonId' => 6,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 138,
            'HoaDonId' => 53,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 139,
            'HoaDonId' => 76,
            'SanPhamId' => 8,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 140,
            'HoaDonId' => 16,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 141,
            'HoaDonId' => 18,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 142,
            'HoaDonId' => 47,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 143,
            'HoaDonId' => 13,
            'SanPhamId' => 21,
            'SoLuong' => 5,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 144,
            'HoaDonId' => 99,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 145,
            'HoaDonId' => 33,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 146,
            'HoaDonId' => 43,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 147,
            'HoaDonId' => 95,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 148,
            'HoaDonId' => 3,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 149,
            'HoaDonId' => 76,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 150,
            'HoaDonId' => 99,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 151,
            'HoaDonId' => 24,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 152,
            'HoaDonId' => 16,
            'SanPhamId' => 21,
            'SoLuong' => 3,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 153,
            'HoaDonId' => 27,
            'SanPhamId' => 13,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 154,
            'HoaDonId' => 2,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 155,
            'HoaDonId' => 65,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 156,
            'HoaDonId' => 98,
            'SanPhamId' => 22,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 157,
            'HoaDonId' => 52,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 158,
            'HoaDonId' => 20,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 159,
            'HoaDonId' => 10,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 160,
            'HoaDonId' => 79,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 161,
            'HoaDonId' => 63,
            'SanPhamId' => 24,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 162,
            'HoaDonId' => 6,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 163,
            'HoaDonId' => 82,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 164,
            'HoaDonId' => 34,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 165,
            'HoaDonId' => 89,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 166,
            'HoaDonId' => 73,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 167,
            'HoaDonId' => 20,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 168,
            'HoaDonId' => 83,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 169,
            'HoaDonId' => 14,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 170,
            'HoaDonId' => 14,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 171,
            'HoaDonId' => 40,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 172,
            'HoaDonId' => 85,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 173,
            'HoaDonId' => 4,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 174,
            'HoaDonId' => 17,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 175,
            'HoaDonId' => 97,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 176,
            'HoaDonId' => 86,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 177,
            'HoaDonId' => 24,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 178,
            'HoaDonId' => 24,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 179,
            'HoaDonId' => 27,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 180,
            'HoaDonId' => 74,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 181,
            'HoaDonId' => 74,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 182,
            'HoaDonId' => 5,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 183,
            'HoaDonId' => 25,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 184,
            'HoaDonId' => 2,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 185,
            'HoaDonId' => 69,
            'SanPhamId' => 32,
            'SoLuong' => 5,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 475000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 186,
            'HoaDonId' => 95,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 187,
            'HoaDonId' => 73,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 188,
            'HoaDonId' => 47,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 189,
            'HoaDonId' => 28,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 190,
            'HoaDonId' => 97,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 191,
            'HoaDonId' => 23,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 192,
            'HoaDonId' => 56,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 193,
            'HoaDonId' => 95,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 194,
            'HoaDonId' => 45,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 195,
            'HoaDonId' => 57,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 196,
            'HoaDonId' => 49,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 197,
            'HoaDonId' => 18,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 198,
            'HoaDonId' => 59,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 199,
            'HoaDonId' => 19,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 200,
            'HoaDonId' => 72,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 201,
            'HoaDonId' => 18,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 202,
            'HoaDonId' => 25,
            'SanPhamId' => 32,
            'SoLuong' => 2,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 190000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 203,
            'HoaDonId' => 72,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 204,
            'HoaDonId' => 43,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 205,
            'HoaDonId' => 39,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 206,
            'HoaDonId' => 15,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 207,
            'HoaDonId' => 36,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 208,
            'HoaDonId' => 89,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 209,
            'HoaDonId' => 29,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 210,
            'HoaDonId' => 3,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 211,
            'HoaDonId' => 1,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 212,
            'HoaDonId' => 37,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 213,
            'HoaDonId' => 94,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 214,
            'HoaDonId' => 19,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 215,
            'HoaDonId' => 70,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 216,
            'HoaDonId' => 60,
            'SanPhamId' => 23,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 12990000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 217,
            'HoaDonId' => 84,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 218,
            'HoaDonId' => 57,
            'SanPhamId' => 21,
            'SoLuong' => 3,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 219,
            'HoaDonId' => 57,
            'SanPhamId' => 11,
            'SoLuong' => 1,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 5000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 220,
            'HoaDonId' => 88,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 221,
            'HoaDonId' => 29,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 222,
            'HoaDonId' => 73,
            'SanPhamId' => 2,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 223,
            'HoaDonId' => 13,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 224,
            'HoaDonId' => 48,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 225,
            'HoaDonId' => 2,
            'SanPhamId' => 11,
            'SoLuong' => 1,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 5000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 226,
            'HoaDonId' => 53,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 227,
            'HoaDonId' => 52,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 228,
            'HoaDonId' => 22,
            'SanPhamId' => 17,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 229,
            'HoaDonId' => 56,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 230,
            'HoaDonId' => 87,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 231,
            'HoaDonId' => 44,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 232,
            'HoaDonId' => 64,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 233,
            'HoaDonId' => 88,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 234,
            'HoaDonId' => 91,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 235,
            'HoaDonId' => 99,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 236,
            'HoaDonId' => 41,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 237,
            'HoaDonId' => 39,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 238,
            'HoaDonId' => 57,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 239,
            'HoaDonId' => 28,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 240,
            'HoaDonId' => 86,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 241,
            'HoaDonId' => 57,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 242,
            'HoaDonId' => 31,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 243,
            'HoaDonId' => 70,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 244,
            'HoaDonId' => 76,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 245,
            'HoaDonId' => 25,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 246,
            'HoaDonId' => 70,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 247,
            'HoaDonId' => 61,
            'SanPhamId' => 23,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 25980000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 248,
            'HoaDonId' => 71,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 249,
            'HoaDonId' => 16,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 250,
            'HoaDonId' => 35,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 251,
            'HoaDonId' => 68,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 252,
            'HoaDonId' => 9,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 253,
            'HoaDonId' => 12,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 254,
            'HoaDonId' => 27,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 255,
            'HoaDonId' => 52,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 256,
            'HoaDonId' => 96,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 257,
            'HoaDonId' => 6,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 258,
            'HoaDonId' => 60,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 259,
            'HoaDonId' => 45,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 260,
            'HoaDonId' => 54,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 261,
            'HoaDonId' => 85,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 262,
            'HoaDonId' => 85,
            'SanPhamId' => 29,
            'SoLuong' => 3,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 195000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 263,
            'HoaDonId' => 37,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 264,
            'HoaDonId' => 23,
            'SanPhamId' => 8,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 265,
            'HoaDonId' => 93,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 266,
            'HoaDonId' => 74,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 267,
            'HoaDonId' => 22,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 268,
            'HoaDonId' => 67,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 269,
            'HoaDonId' => 20,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 270,
            'HoaDonId' => 31,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 271,
            'HoaDonId' => 34,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 272,
            'HoaDonId' => 62,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 273,
            'HoaDonId' => 91,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 274,
            'HoaDonId' => 29,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 275,
            'HoaDonId' => 62,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 276,
            'HoaDonId' => 52,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 277,
            'HoaDonId' => 27,
            'SanPhamId' => 14,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 278,
            'HoaDonId' => 4,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 279,
            'HoaDonId' => 41,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 280,
            'HoaDonId' => 81,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 281,
            'HoaDonId' => 30,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 282,
            'HoaDonId' => 24,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 283,
            'HoaDonId' => 79,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 284,
            'HoaDonId' => 56,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 285,
            'HoaDonId' => 4,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 286,
            'HoaDonId' => 32,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 287,
            'HoaDonId' => 19,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 288,
            'HoaDonId' => 9,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 289,
            'HoaDonId' => 54,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 290,
            'HoaDonId' => 52,
            'SanPhamId' => 3,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 291,
            'HoaDonId' => 41,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 292,
            'HoaDonId' => 54,
            'SanPhamId' => 16,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 293,
            'HoaDonId' => 14,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 294,
            'HoaDonId' => 95,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 295,
            'HoaDonId' => 82,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 296,
            'HoaDonId' => 5,
            'SanPhamId' => 20,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 297,
            'HoaDonId' => 78,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 298,
            'HoaDonId' => 26,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 299,
            'HoaDonId' => 96,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 300,
            'HoaDonId' => 86,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 301,
            'HoaDonId' => 73,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 302,
            'HoaDonId' => 84,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 303,
            'HoaDonId' => 43,
            'SanPhamId' => 30,
            'SoLuong' => 3,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 465000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 304,
            'HoaDonId' => 29,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 305,
            'HoaDonId' => 83,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 306,
            'HoaDonId' => 68,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 307,
            'HoaDonId' => 94,
            'SanPhamId' => 12,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 308,
            'HoaDonId' => 36,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 309,
            'HoaDonId' => 47,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 310,
            'HoaDonId' => 74,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 311,
            'HoaDonId' => 99,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 380000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 312,
            'HoaDonId' => 89,
            'SanPhamId' => 24,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 27960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 313,
            'HoaDonId' => 12,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 314,
            'HoaDonId' => 29,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 315,
            'HoaDonId' => 78,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 316,
            'HoaDonId' => 70,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 317,
            'HoaDonId' => 45,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 318,
            'HoaDonId' => 66,
            'SanPhamId' => 2,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 319,
            'HoaDonId' => 84,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 320,
            'HoaDonId' => 64,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 321,
            'HoaDonId' => 29,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 322,
            'HoaDonId' => 76,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 323,
            'HoaDonId' => 1,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 324,
            'HoaDonId' => 65,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 325,
            'HoaDonId' => 30,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 326,
            'HoaDonId' => 77,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 327,
            'HoaDonId' => 56,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 328,
            'HoaDonId' => 33,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 329,
            'HoaDonId' => 78,
            'SanPhamId' => 15,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 330,
            'HoaDonId' => 18,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 331,
            'HoaDonId' => 76,
            'SanPhamId' => 2,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 332,
            'HoaDonId' => 47,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 333,
            'HoaDonId' => 97,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 334,
            'HoaDonId' => 83,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 335,
            'HoaDonId' => 39,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 336,
            'HoaDonId' => 35,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 337,
            'HoaDonId' => 51,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 338,
            'HoaDonId' => 37,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 339,
            'HoaDonId' => 91,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 340,
            'HoaDonId' => 22,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 341,
            'HoaDonId' => 2,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 342,
            'HoaDonId' => 23,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 343,
            'HoaDonId' => 14,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 344,
            'HoaDonId' => 12,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 345,
            'HoaDonId' => 89,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 346,
            'HoaDonId' => 77,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 347,
            'HoaDonId' => 91,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 348,
            'HoaDonId' => 42,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 349,
            'HoaDonId' => 13,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 350,
            'HoaDonId' => 25,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 351,
            'HoaDonId' => 19,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 352,
            'HoaDonId' => 53,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 353,
            'HoaDonId' => 65,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 354,
            'HoaDonId' => 86,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 355,
            'HoaDonId' => 82,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 356,
            'HoaDonId' => 32,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 357,
            'HoaDonId' => 82,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 358,
            'HoaDonId' => 57,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 359,
            'HoaDonId' => 10,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 360,
            'HoaDonId' => 13,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 361,
            'HoaDonId' => 10,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 362,
            'HoaDonId' => 93,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 363,
            'HoaDonId' => 33,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 364,
            'HoaDonId' => 20,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 365,
            'HoaDonId' => 22,
            'SanPhamId' => 30,
            'SoLuong' => 3,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 465000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 366,
            'HoaDonId' => 74,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 367,
            'HoaDonId' => 75,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 368,
            'HoaDonId' => 77,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 369,
            'HoaDonId' => 79,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 370,
            'HoaDonId' => 57,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 371,
            'HoaDonId' => 2,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 372,
            'HoaDonId' => 54,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 373,
            'HoaDonId' => 96,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 374,
            'HoaDonId' => 27,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 375,
            'HoaDonId' => 71,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 376,
            'HoaDonId' => 38,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 377,
            'HoaDonId' => 83,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 378,
            'HoaDonId' => 51,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 379,
            'HoaDonId' => 88,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 380,
            'HoaDonId' => 55,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 381,
            'HoaDonId' => 95,
            'SanPhamId' => 25,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 382,
            'HoaDonId' => 86,
            'SanPhamId' => 14,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 383,
            'HoaDonId' => 96,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 384,
            'HoaDonId' => 48,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 385,
            'HoaDonId' => 83,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 386,
            'HoaDonId' => 12,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 387,
            'HoaDonId' => 95,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 388,
            'HoaDonId' => 61,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 389,
            'HoaDonId' => 49,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 390,
            'HoaDonId' => 1,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 391,
            'HoaDonId' => 57,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 392,
            'HoaDonId' => 26,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 393,
            'HoaDonId' => 90,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 394,
            'HoaDonId' => 14,
            'SanPhamId' => 21,
            'SoLuong' => 5,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 395,
            'HoaDonId' => 54,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 396,
            'HoaDonId' => 10,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 397,
            'HoaDonId' => 15,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 398,
            'HoaDonId' => 60,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 399,
            'HoaDonId' => 34,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 400,
            'HoaDonId' => 10,
            'SanPhamId' => 27,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 19950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 401,
            'HoaDonId' => 85,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 402,
            'HoaDonId' => 59,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 403,
            'HoaDonId' => 66,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 404,
            'HoaDonId' => 78,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 405,
            'HoaDonId' => 46,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 406,
            'HoaDonId' => 54,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 407,
            'HoaDonId' => 63,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 408,
            'HoaDonId' => 25,
            'SanPhamId' => 6,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 409,
            'HoaDonId' => 76,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 410,
            'HoaDonId' => 43,
            'SanPhamId' => 8,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 411,
            'HoaDonId' => 98,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 412,
            'HoaDonId' => 93,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 413,
            'HoaDonId' => 15,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 414,
            'HoaDonId' => 32,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 415,
            'HoaDonId' => 25,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 416,
            'HoaDonId' => 69,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 417,
            'HoaDonId' => 44,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 418,
            'HoaDonId' => 37,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 419,
            'HoaDonId' => 92,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 420,
            'HoaDonId' => 50,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 421,
            'HoaDonId' => 81,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 422,
            'HoaDonId' => 60,
            'SanPhamId' => 20,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 423,
            'HoaDonId' => 46,
            'SanPhamId' => 4,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 424,
            'HoaDonId' => 6,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 425,
            'HoaDonId' => 51,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 426,
            'HoaDonId' => 7,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 427,
            'HoaDonId' => 41,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 428,
            'HoaDonId' => 38,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 429,
            'HoaDonId' => 27,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 430,
            'HoaDonId' => 77,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 431,
            'HoaDonId' => 51,
            'SanPhamId' => 10,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 432,
            'HoaDonId' => 4,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 433,
            'HoaDonId' => 67,
            'SanPhamId' => 27,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 19950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 434,
            'HoaDonId' => 21,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 435,
            'HoaDonId' => 73,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 436,
            'HoaDonId' => 96,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 437,
            'HoaDonId' => 84,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 438,
            'HoaDonId' => 49,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 439,
            'HoaDonId' => 63,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 440,
            'HoaDonId' => 70,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 441,
            'HoaDonId' => 40,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 442,
            'HoaDonId' => 47,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 443,
            'HoaDonId' => 83,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 444,
            'HoaDonId' => 10,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 445,
            'HoaDonId' => 89,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 446,
            'HoaDonId' => 79,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 447,
            'HoaDonId' => 84,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 448,
            'HoaDonId' => 33,
            'SanPhamId' => 25,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 449,
            'HoaDonId' => 89,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 450,
            'HoaDonId' => 99,
            'SanPhamId' => 20,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 451,
            'HoaDonId' => 48,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 452,
            'HoaDonId' => 16,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 453,
            'HoaDonId' => 91,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 454,
            'HoaDonId' => 43,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 455,
            'HoaDonId' => 36,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 456,
            'HoaDonId' => 67,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 457,
            'HoaDonId' => 8,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 458,
            'HoaDonId' => 16,
            'SanPhamId' => 24,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 459,
            'HoaDonId' => 30,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 460,
            'HoaDonId' => 99,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 461,
            'HoaDonId' => 77,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 462,
            'HoaDonId' => 40,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 463,
            'HoaDonId' => 26,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 464,
            'HoaDonId' => 19,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 465,
            'HoaDonId' => 25,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 466,
            'HoaDonId' => 44,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 467,
            'HoaDonId' => 89,
            'SanPhamId' => 7,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 468,
            'HoaDonId' => 94,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 469,
            'HoaDonId' => 32,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 470,
            'HoaDonId' => 69,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 471,
            'HoaDonId' => 50,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 472,
            'HoaDonId' => 27,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 473,
            'HoaDonId' => 70,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 474,
            'HoaDonId' => 98,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 475,
            'HoaDonId' => 88,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 476,
            'HoaDonId' => 99,
            'SanPhamId' => 7,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 477,
            'HoaDonId' => 44,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 478,
            'HoaDonId' => 21,
            'SanPhamId' => 2,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 479,
            'HoaDonId' => 60,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 480,
            'HoaDonId' => 73,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 481,
            'HoaDonId' => 89,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 482,
            'HoaDonId' => 68,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 483,
            'HoaDonId' => 31,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 484,
            'HoaDonId' => 21,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 485,
            'HoaDonId' => 40,
            'SanPhamId' => 11,
            'SoLuong' => 2,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 486,
            'HoaDonId' => 21,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 487,
            'HoaDonId' => 48,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 488,
            'HoaDonId' => 64,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 489,
            'HoaDonId' => 51,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 310000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 490,
            'HoaDonId' => 97,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 491,
            'HoaDonId' => 73,
            'SanPhamId' => 10,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 492,
            'HoaDonId' => 60,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 493,
            'HoaDonId' => 35,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 494,
            'HoaDonId' => 91,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 495,
            'HoaDonId' => 23,
            'SanPhamId' => 23,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 38970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 496,
            'HoaDonId' => 60,
            'SanPhamId' => 15,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 55000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 497,
            'HoaDonId' => 8,
            'SanPhamId' => 13,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 498,
            'HoaDonId' => 15,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 499,
            'HoaDonId' => 34,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 500,
            'HoaDonId' => 95,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Giohang::create([
            'id' => 1,
            'KhachHangId' => 32,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 2,
            'KhachHangId' => 46,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 3,
            'KhachHangId' => 20,
            'SanPhamId' => 13,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 4,
            'KhachHangId' => 33,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 5,
            'KhachHangId' => 1,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 6,
            'KhachHangId' => 43,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 7,
            'KhachHangId' => 55,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 8,
            'KhachHangId' => 42,
            'SanPhamId' => 13,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 9,
            'KhachHangId' => 8,
            'SanPhamId' => 14,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 10,
            'KhachHangId' => 20,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 11,
            'KhachHangId' => 18,
            'SanPhamId' => 23,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 12,
            'KhachHangId' => 6,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 13,
            'KhachHangId' => 55,
            'SanPhamId' => 8,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 14,
            'KhachHangId' => 39,
            'SanPhamId' => 11,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 15,
            'KhachHangId' => 51,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 16,
            'KhachHangId' => 41,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 17,
            'KhachHangId' => 31,
            'SanPhamId' => 11,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 18,
            'KhachHangId' => 30,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 19,
            'KhachHangId' => 11,
            'SanPhamId' => 25,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 20,
            'KhachHangId' => 43,
            'SanPhamId' => 23,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 21,
            'KhachHangId' => 41,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 22,
            'KhachHangId' => 27,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 23,
            'KhachHangId' => 32,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 24,
            'KhachHangId' => 32,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 25,
            'KhachHangId' => 50,
            'SanPhamId' => 28,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 26,
            'KhachHangId' => 3,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 27,
            'KhachHangId' => 45,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 28,
            'KhachHangId' => 48,
            'SanPhamId' => 21,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 29,
            'KhachHangId' => 54,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 30,
            'KhachHangId' => 5,
            'SanPhamId' => 8,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 31,
            'KhachHangId' => 30,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 32,
            'KhachHangId' => 46,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 33,
            'KhachHangId' => 5,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 34,
            'KhachHangId' => 31,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 35,
            'KhachHangId' => 32,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 36,
            'KhachHangId' => 24,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 37,
            'KhachHangId' => 18,
            'SanPhamId' => 20,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 38,
            'KhachHangId' => 9,
            'SanPhamId' => 25,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 39,
            'KhachHangId' => 19,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 40,
            'KhachHangId' => 27,
            'SanPhamId' => 29,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 41,
            'KhachHangId' => 27,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 42,
            'KhachHangId' => 9,
            'SanPhamId' => 8,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 43,
            'KhachHangId' => 52,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 44,
            'KhachHangId' => 5,
            'SanPhamId' => 21,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 45,
            'KhachHangId' => 39,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 46,
            'KhachHangId' => 46,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 47,
            'KhachHangId' => 33,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 48,
            'KhachHangId' => 35,
            'SanPhamId' => 18,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 49,
            'KhachHangId' => 53,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 50,
            'KhachHangId' => 48,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 51,
            'KhachHangId' => 36,
            'SanPhamId' => 28,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 52,
            'KhachHangId' => 11,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 53,
            'KhachHangId' => 18,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 54,
            'KhachHangId' => 4,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 55,
            'KhachHangId' => 18,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 56,
            'KhachHangId' => 23,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 57,
            'KhachHangId' => 8,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 58,
            'KhachHangId' => 28,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 59,
            'KhachHangId' => 31,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 60,
            'KhachHangId' => 38,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 61,
            'KhachHangId' => 20,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 62,
            'KhachHangId' => 30,
            'SanPhamId' => 25,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 63,
            'KhachHangId' => 56,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 64,
            'KhachHangId' => 39,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 65,
            'KhachHangId' => 22,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 66,
            'KhachHangId' => 21,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 67,
            'KhachHangId' => 14,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 68,
            'KhachHangId' => 3,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 69,
            'KhachHangId' => 10,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 70,
            'KhachHangId' => 50,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 71,
            'KhachHangId' => 47,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 72,
            'KhachHangId' => 23,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 73,
            'KhachHangId' => 39,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 74,
            'KhachHangId' => 7,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 75,
            'KhachHangId' => 5,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 76,
            'KhachHangId' => 25,
            'SanPhamId' => 14,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 77,
            'KhachHangId' => 15,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 78,
            'KhachHangId' => 30,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 79,
            'KhachHangId' => 43,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 80,
            'KhachHangId' => 55,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 81,
            'KhachHangId' => 10,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 82,
            'KhachHangId' => 32,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 83,
            'KhachHangId' => 9,
            'SanPhamId' => 13,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 84,
            'KhachHangId' => 17,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 85,
            'KhachHangId' => 25,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 86,
            'KhachHangId' => 42,
            'SanPhamId' => 15,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 87,
            'KhachHangId' => 22,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 88,
            'KhachHangId' => 21,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 89,
            'KhachHangId' => 14,
            'SanPhamId' => 12,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 90,
            'KhachHangId' => 55,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 91,
            'KhachHangId' => 7,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 92,
            'KhachHangId' => 23,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 93,
            'KhachHangId' => 35,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 94,
            'KhachHangId' => 27,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 95,
            'KhachHangId' => 30,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 96,
            'KhachHangId' => 29,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 97,
            'KhachHangId' => 18,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 98,
            'KhachHangId' => 50,
            'SanPhamId' => 6,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 99,
            'KhachHangId' => 35,
            'SanPhamId' => 25,
            'SoLuong' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Giohang::create([
            'id' => 100,
            'KhachHangId' => 4,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);

        Yeuthich::create([
            'id' => 1,
            'KhachHangId' => 38,
            'SanPhamId' => 23,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 2,
            'KhachHangId' => 24,
            'SanPhamId' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 3,
            'KhachHangId' => 10,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 4,
            'KhachHangId' => 42,
            'SanPhamId' => 30,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 5,
            'KhachHangId' => 6,
            'SanPhamId' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 6,
            'KhachHangId' => 41,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 7,
            'KhachHangId' => 7,
            'SanPhamId' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 8,
            'KhachHangId' => 18,
            'SanPhamId' => 27,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 9,
            'KhachHangId' => 48,
            'SanPhamId' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 10,
            'KhachHangId' => 15,
            'SanPhamId' => 12,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 11,
            'KhachHangId' => 12,
            'SanPhamId' => 22,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 12,
            'KhachHangId' => 39,
            'SanPhamId' => 22,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 13,
            'KhachHangId' => 8,
            'SanPhamId' => 12,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 14,
            'KhachHangId' => 20,
            'SanPhamId' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 15,
            'KhachHangId' => 54,
            'SanPhamId' => 14,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 16,
            'KhachHangId' => 47,
            'SanPhamId' => 19,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 17,
            'KhachHangId' => 45,
            'SanPhamId' => 23,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 18,
            'KhachHangId' => 34,
            'SanPhamId' => 27,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 19,
            'KhachHangId' => 25,
            'SanPhamId' => 4,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 20,
            'KhachHangId' => 34,
            'SanPhamId' => 13,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 21,
            'KhachHangId' => 5,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 22,
            'KhachHangId' => 32,
            'SanPhamId' => 3,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 23,
            'KhachHangId' => 11,
            'SanPhamId' => 28,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 24,
            'KhachHangId' => 10,
            'SanPhamId' => 6,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 25,
            'KhachHangId' => 15,
            'SanPhamId' => 30,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 26,
            'KhachHangId' => 4,
            'SanPhamId' => 20,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 27,
            'KhachHangId' => 19,
            'SanPhamId' => 18,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 28,
            'KhachHangId' => 32,
            'SanPhamId' => 15,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 29,
            'KhachHangId' => 51,
            'SanPhamId' => 19,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 30,
            'KhachHangId' => 21,
            'SanPhamId' => 12,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 31,
            'KhachHangId' => 19,
            'SanPhamId' => 22,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 32,
            'KhachHangId' => 26,
            'SanPhamId' => 19,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 33,
            'KhachHangId' => 32,
            'SanPhamId' => 6,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 34,
            'KhachHangId' => 50,
            'SanPhamId' => 26,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 35,
            'KhachHangId' => 24,
            'SanPhamId' => 19,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 36,
            'KhachHangId' => 34,
            'SanPhamId' => 6,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 37,
            'KhachHangId' => 10,
            'SanPhamId' => 16,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 38,
            'KhachHangId' => 51,
            'SanPhamId' => 18,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 39,
            'KhachHangId' => 40,
            'SanPhamId' => 14,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 40,
            'KhachHangId' => 27,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 41,
            'KhachHangId' => 8,
            'SanPhamId' => 6,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 42,
            'KhachHangId' => 32,
            'SanPhamId' => 7,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 43,
            'KhachHangId' => 19,
            'SanPhamId' => 23,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 44,
            'KhachHangId' => 44,
            'SanPhamId' => 17,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 45,
            'KhachHangId' => 20,
            'SanPhamId' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 46,
            'KhachHangId' => 44,
            'SanPhamId' => 2,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 47,
            'KhachHangId' => 39,
            'SanPhamId' => 27,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 48,
            'KhachHangId' => 53,
            'SanPhamId' => 26,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 49,
            'KhachHangId' => 32,
            'SanPhamId' => 1,
            'created_at' => NULL,
            'updated_at' => NULL
        ]);



        Yeuthich::create([
            'id' => 50,
            'KhachHangId' => 22,
            'SanPhamId' => 3,
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
        Diachi::create([
            'id' => 1,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Hồ Huấn Nghiệp',
            'Phone' => '0618431768',
            'DiaChiChiTiet' => 'J5, Nguyễn Hữu Cầu, Thanh Hóa',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 2,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Hàm Nghi',
            'Phone' => '0452803292',
            'DiaChiChiTiet' => 'D4, Huỳnh Khương Ninh, Tiền Giang',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 3,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Hồ Tùng Mậu',
            'Phone' => '0566425150',
            'DiaChiChiTiet' => 'P1, Bùi Viện, Hải Phòng',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 4,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Nguyễn Cư Trinh',
            'Phone' => '0982099712',
            'DiaChiChiTiet' => 'W7, Mai Thị Lựu, Trà Vinh',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 5,
            'KhachHangId' => 5,
            'TenNguoiNhan' => 'Bùi Viện',
            'Phone' => '0333641834',
            'DiaChiChiTiet' => 'D3, Nam Quốc Cang, Bình Định',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 6,
            'KhachHangId' => 6,
            'TenNguoiNhan' => 'Eva_Brunet',
            'Phone' => '01-70-39-10-88',
            'DiaChiChiTiet' => 'Rue Barrier, Rouen, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 7,
            'KhachHangId' => 7,
            'TenNguoiNhan' => 'Tristan_Møller',
            'Phone' => '16961009',
            'DiaChiChiTiet' => 'Græsvangen, Sønder Stenderup, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 8,
            'KhachHangId' => 8,
            'TenNguoiNhan' => 'Anselm_Abel',
            'Phone' => '0497-4150057',
            'DiaChiChiTiet' => 'Ahornweg, Markkleeberg, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 9,
            'KhachHangId' => 9,
            'TenNguoiNhan' => 'Isabelle_Baker',
            'Phone' => '021-635-8296',
            'DiaChiChiTiet' => 'New Street, Dungarvan, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 10,
            'KhachHangId' => 10,
            'TenNguoiNhan' => 'Selma_Rasmussen',
            'Phone' => '99854271',
            'DiaChiChiTiet' => 'Skovstjernevej, Viby Sj., Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 11,
            'KhachHangId' => 11,
            'TenNguoiNhan' => 'Xavier_Smith',
            'Phone' => '(170)-823-5752',
            'DiaChiChiTiet' => 'Mt Eden Road, Tauranga, New Zealand',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 12,
            'KhachHangId' => 12,
            'TenNguoiNhan' => 'Dilano_De Groen',
            'Phone' => '(489)-330-0847',
            'DiaChiChiTiet' => 'Duykerdam, Ens, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 13,
            'KhachHangId' => 13,
            'TenNguoiNhan' => 'Jaime_Cano',
            'Phone' => '947-024-220',
            'DiaChiChiTiet' => 'Paseo de Extremadura, Santa Cruz de Tenerife, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 14,
            'KhachHangId' => 14,
            'TenNguoiNhan' => 'Selami_Van Leeuwe',
            'Phone' => '(607)-530-6761',
            'DiaChiChiTiet' => 'Koppertjesland, Sint Jansteen, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 15,
            'KhachHangId' => 15,
            'TenNguoiNhan' => 'Arianna_Mendoza',
            'Phone' => '01-5137-4415',
            'DiaChiChiTiet' => 'Homestead Rd, Busselton, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 16,
            'KhachHangId' => 16,
            'TenNguoiNhan' => 'Monsieur.Halil_Denis',
            'Phone' => '076 624 70 22',
            'DiaChiChiTiet' => 'Rue de LAbbé-Roger-Derry, Thusis, Switzerland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 17,
            'KhachHangId' => 17,
            'TenNguoiNhan' => 'Winfried_Böck',
            'Phone' => '0455-7981435',
            'DiaChiChiTiet' => 'Birkenweg, Pausa-Mühltroff, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 18,
            'KhachHangId' => 18,
            'TenNguoiNhan' => 'Grace_Stanley',
            'Phone' => '015396 56883',
            'DiaChiChiTiet' => 'Manor Road, Portsmouth, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 19,
            'KhachHangId' => 19,
            'TenNguoiNhan' => 'Ravn_Bore',
            'Phone' => '70326619',
            'DiaChiChiTiet' => 'Valmueveien, Valestrandfossen, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 20,
            'KhachHangId' => 20,
            'TenNguoiNhan' => 'Gina_Evans',
            'Phone' => '(042)-015-6700',
            'DiaChiChiTiet' => 'Mcgowen St, Saint Paul, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 21,
            'KhachHangId' => 21,
            'TenNguoiNhan' => 'Yvete_Martins',
            'Phone' => '(81) 3896-1502',
            'DiaChiChiTiet' => 'Travessa dos Martírios, Rio Branco, Brazil',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 22,
            'KhachHangId' => 22,
            'TenNguoiNhan' => 'Lucas_Johnston',
            'Phone' => '01-9246-8431',
            'DiaChiChiTiet' => 'Robinson Rd, Warragul, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 23,
            'KhachHangId' => 23,
            'TenNguoiNhan' => 'Jose_Ortega',
            'Phone' => '962-099-714',
            'DiaChiChiTiet' => 'Calle de Alcalá, Mérida, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 24,
            'KhachHangId' => 24,
            'TenNguoiNhan' => 'Monsieur.Noah_Fabre',
            'Phone' => '077 454 37 76',
            'DiaChiChiTiet' => 'Place du 8 Novembre 1942, Saanen, Switzerland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 25,
            'KhachHangId' => 25,
            'TenNguoiNhan' => 'Kayla_Powell',
            'Phone' => '011-887-3410',
            'DiaChiChiTiet' => 'Rookery Road, Balbriggan, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 26,
            'KhachHangId' => 26,
            'TenNguoiNhan' => 'Necati_Yıldırım',
            'Phone' => '(044)-771-1565',
            'DiaChiChiTiet' => 'Kushimoto Sk, Çorum, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 27,
            'KhachHangId' => 27,
            'TenNguoiNhan' => 'Murat_Başoğlu',
            'Phone' => '(417)-493-7694',
            'DiaChiChiTiet' => 'Mevlana Cd, Erzurum, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 28,
            'KhachHangId' => 28,
            'TenNguoiNhan' => 'اميرعلي_پارسا',
            'Phone' => '058-72469339',
            'DiaChiChiTiet' => 'آفریقا, خوی, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 29,
            'KhachHangId' => 29,
            'TenNguoiNhan' => 'Lise_Giraud',
            'Phone' => '01-34-48-10-18',
            'DiaChiChiTiet' => 'Rue Paul Bert, Aulnay-sous-Bois, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 30,
            'KhachHangId' => 30,
            'TenNguoiNhan' => 'عرشيا_قاسمی',
            'Phone' => '038-68498535',
            'DiaChiChiTiet' => 'استاد قریب, ساوه, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 31,
            'KhachHangId' => 31,
            'TenNguoiNhan' => 'Emma_Ross',
            'Phone' => '193-837-2560',
            'DiaChiChiTiet' => 'Dundas Rd, Russell, Canada',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 32,
            'KhachHangId' => 32,
            'TenNguoiNhan' => 'Antonia_Gallego',
            'Phone' => '997-476-306',
            'DiaChiChiTiet' => 'Calle del Pez, Almería, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 33,
            'KhachHangId' => 33,
            'TenNguoiNhan' => 'شایان_سالاری',
            'Phone' => '046-43829717',
            'DiaChiChiTiet' => 'آیت الله طالقانی, سنندج, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 34,
            'KhachHangId' => 34,
            'TenNguoiNhan' => 'Zachary_Willis',
            'Phone' => '041-970-5705',
            'DiaChiChiTiet' => 'Albert Road, Tralee, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 35,
            'KhachHangId' => 35,
            'TenNguoiNhan' => 'Erica_Morgan',
            'Phone' => '(507)-002-2277',
            'DiaChiChiTiet' => 'Samaritan Dr, Aubrey, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 36,
            'KhachHangId' => 36,
            'TenNguoiNhan' => 'Jaylen_Van der Zwaan',
            'Phone' => '(534)-286-1389',
            'DiaChiChiTiet' => 'Clioplein, Overloon, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 37,
            'KhachHangId' => 37,
            'TenNguoiNhan' => 'Adèle_Joly',
            'Phone' => '02-43-99-12-72',
            'DiaChiChiTiet' => 'Rue Abel-Hovelacque, Nancy, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 38,
            'KhachHangId' => 38,
            'TenNguoiNhan' => 'Ruben_Clarke',
            'Phone' => '017684 44529',
            'DiaChiChiTiet' => 'Mill Lane, St Davids, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 39,
            'KhachHangId' => 39,
            'TenNguoiNhan' => 'Lilou_Perrin',
            'Phone' => '05-83-43-99-24',
            'DiaChiChiTiet' => 'Boulevard de la Duchère, Saint-Pierre, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 40,
            'KhachHangId' => 40,
            'TenNguoiNhan' => 'کیمیا_كامياران',
            'Phone' => '092-03645982',
            'DiaChiChiTiet' => 'میدان امام خمینی, تبریز, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 41,
            'KhachHangId' => 41,
            'TenNguoiNhan' => 'Tale_Smestad',
            'Phone' => '57356215',
            'DiaChiChiTiet' => 'Langbølgen, Sørland, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 42,
            'KhachHangId' => 42,
            'TenNguoiNhan' => 'Alexis_Chan',
            'Phone' => '757-179-0206',
            'DiaChiChiTiet' => 'Pine Rd, Stirling, Canada',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 43,
            'KhachHangId' => 43,
            'TenNguoiNhan' => 'Malou_Nielsen',
            'Phone' => '96787914',
            'DiaChiChiTiet' => 'Buen, Assens, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 44,
            'KhachHangId' => 44,
            'TenNguoiNhan' => 'Gül_Günday',
            'Phone' => '(420)-339-4996',
            'DiaChiChiTiet' => 'Fatih Sultan Mehmet Cd, Kayseri, Turkey',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 45,
            'KhachHangId' => 45,
            'TenNguoiNhan' => 'آوین_کریمی',
            'Phone' => '090-89999548',
            'DiaChiChiTiet' => 'آیت الله مدرس, زاهدان, Iran',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 46,
            'KhachHangId' => 46,
            'TenNguoiNhan' => 'Dora_Sullivan',
            'Phone' => '(954)-636-3855',
            'DiaChiChiTiet' => 'Wycliff Ave, Stockton, United States',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 47,
            'KhachHangId' => 47,
            'TenNguoiNhan' => 'Stephanie_Ross',
            'Phone' => '051-945-8379',
            'DiaChiChiTiet' => 'The Drive, Roscommon, Ireland',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 48,
            'KhachHangId' => 48,
            'TenNguoiNhan' => 'Serenity_Mccoy',
            'Phone' => '01-2775-8588',
            'DiaChiChiTiet' => 'E North St, Bendigo, Australia',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 49,
            'KhachHangId' => 49,
            'TenNguoiNhan' => 'Luz_Arias',
            'Phone' => '938-354-983',
            'DiaChiChiTiet' => 'Paseo de Zorrilla, Alcobendas, Spain',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 50,
            'KhachHangId' => 50,
            'TenNguoiNhan' => 'Storm_Larsen',
            'Phone' => '85506086',
            'DiaChiChiTiet' => 'Søvænget, Jerslev Sj, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 51,
            'KhachHangId' => 51,
            'TenNguoiNhan' => 'Lila_Pierre',
            'Phone' => '04-00-84-09-54',
            'DiaChiChiTiet' => 'Rue Dugas-Montbel, Orléans, France',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 52,
            'KhachHangId' => 52,
            'TenNguoiNhan' => 'Wayne_Rhodes',
            'Phone' => '015396 72883',
            'DiaChiChiTiet' => 'Station Road, Leicester, United Kingdom',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 53,
            'KhachHangId' => 53,
            'TenNguoiNhan' => 'Naömi_Westerhof',
            'Phone' => '(485)-591-8578',
            'DiaChiChiTiet' => 'De Borstelmaker, Vreeswijk, Netherlands',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 54,
            'KhachHangId' => 54,
            'TenNguoiNhan' => 'Ulf_Nagel',
            'Phone' => '0492-1373598',
            'DiaChiChiTiet' => 'Grüner Weg, Barmstedt, Germany',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 55,
            'KhachHangId' => 55,
            'TenNguoiNhan' => 'Tilde_Rasmussen',
            'Phone' => '90306008',
            'DiaChiChiTiet' => 'Egevangen, København Ø, Denmark',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 56,
            'KhachHangId' => 56,
            'TenNguoiNhan' => 'Rebekka_Schie',
            'Phone' => '65371361',
            'DiaChiChiTiet' => 'Lachmanns vei, Skarnes, Norway',
            'PhuongXa' => NULL,
            'QuanHuyen' => NULL,
            'TinhThanhPho' => NULL,
            'CodePhuongXa' => NULL,
            'CodeQuanHuyen' => NULL,
            'CodeTinhThanhPho' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 64,
            'KhachHangId' => 1,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'CodePhuongXa' => 27595,
            'CodeQuanHuyen' => 785,
            'CodeTinhThanhPho' => 79,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 65,
            'KhachHangId' => 2,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'PhuongXa' => 'Phường Thượng Thanh',
            'QuanHuyen' => 'Quận Long Biên',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'CodePhuongXa' => 115,
            'CodeQuanHuyen' => 4,
            'CodeTinhThanhPho' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 66,
            'KhachHangId' => 3,
            'TenNguoiNhan' => 'Dat ne`',
            'Phone' => '091928739',
            'DiaChiChiTiet' => '123/ds1 Duong ABCXYZ',
            'PhuongXa' => 'Thị trấn Tân Túc',
            'QuanHuyen' => 'Huyện Bình Chánh',
            'TinhThanhPho' => 'Thành phố Hồ Chí Minh',
            'CodePhuongXa' => 27595,
            'CodeQuanHuyen' => 785,
            'CodeTinhThanhPho' => 79,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Diachi::create([
            'id' => 67,
            'KhachHangId' => 4,
            'TenNguoiNhan' => 'Dattt ne``',
            'Phone' => '0901283123',
            'DiaChiChiTiet' => '123/asasd Đường An Dương Vương',
            'PhuongXa' => 'Phường Thượng Thanh',
            'QuanHuyen' => 'Quận Long Biên',
            'TinhThanhPho' => 'Thành phố Hà Nội',
            'CodePhuongXa' => 115,
            'CodeQuanHuyen' => 4,
            'CodeTinhThanhPho' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Hoadon::create([
            'id' => 1,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 12,
            'TongTien' => 72180000,
            'TrangThai' => '3',
            'created_at' => '2015-08-17 04:06:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 2,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 12,
            'TongTien' => 88155000,
            'TrangThai' => '1',
            'created_at' => '2019-09-16 17:55:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 3,
            'DiaChiId' => 10,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 107000000,
            'TrangThai' => '2',
            'created_at' => '2016-03-21 11:49:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 4,
            'DiaChiId' => 3,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 85280000,
            'TrangThai' => '2',
            'created_at' => '2018-10-03 20:12:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 5,
            'DiaChiId' => 64,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 5,
            'TongTien' => 28000000,
            'TrangThai' => '2',
            'created_at' => '2016-09-09 09:04:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 6,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 17,
            'TongTien' => 159000000,
            'TrangThai' => '5',
            'created_at' => '2019-03-21 01:04:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 7,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 1,
            'TongTien' => 6000000,
            'TrangThai' => '4',
            'created_at' => '2015-04-14 08:07:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 8,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 7,
            'TongTien' => 94000000,
            'TrangThai' => '3',
            'created_at' => '2016-10-10 12:04:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 9,
            'DiaChiId' => 42,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 17,
            'TongTien' => 140000000,
            'TrangThai' => '3',
            'created_at' => '2017-10-05 17:32:56',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 10,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 19,
            'TongTien' => 131180000,
            'TrangThai' => '1',
            'created_at' => '2016-12-16 16:25:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 11,
            'DiaChiId' => 64,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => '1',
            'created_at' => '2019-09-03 14:38:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 12,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 23,
            'TongTien' => 136325000,
            'TrangThai' => '1',
            'created_at' => '2015-05-10 10:18:04',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 13,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 28,
            'TongTien' => 231300000,
            'TrangThai' => '1',
            'created_at' => '2017-01-30 20:22:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 14,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 19,
            'TongTien' => 93175000,
            'TrangThai' => '3',
            'created_at' => '2016-02-07 04:18:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 15,
            'DiaChiId' => 41,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 149000000,
            'TrangThai' => '5',
            'created_at' => '2017-04-01 23:06:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 16,
            'DiaChiId' => 18,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 24,
            'TongTien' => 145405000,
            'TrangThai' => '5',
            'created_at' => '2017-03-02 02:08:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 17,
            'DiaChiId' => 46,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 6,
            'TongTien' => 14260000,
            'TrangThai' => '1',
            'created_at' => '2015-06-30 01:54:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 18,
            'DiaChiId' => 6,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 12,
            'TongTien' => 122045000,
            'TrangThai' => '3',
            'created_at' => '2016-08-05 08:03:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 19,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 19,
            'TongTien' => 104005000,
            'TrangThai' => '4',
            'created_at' => '2015-08-24 06:58:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 20,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 16,
            'TongTien' => 91185000,
            'TrangThai' => '2',
            'created_at' => '2016-02-12 02:06:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 21,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 11,
            'TongTien' => 68755000,
            'TrangThai' => '2',
            'created_at' => '2018-11-09 10:19:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 22,
            'DiaChiId' => 12,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 70455000,
            'TrangThai' => '3',
            'created_at' => '2016-06-27 12:20:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 23,
            'DiaChiId' => 8,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 128970000,
            'TrangThai' => '5',
            'created_at' => '2015-12-01 16:28:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 24,
            'DiaChiId' => 38,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 9,
            'TongTien' => 88980000,
            'TrangThai' => '1',
            'created_at' => '2016-01-05 11:11:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 25,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 20,
            'TongTien' => 102475000,
            'TrangThai' => '5',
            'created_at' => '2019-01-31 00:46:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 26,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 12,
            'TongTien' => 41755000,
            'TrangThai' => '5',
            'created_at' => '2019-07-25 01:29:40',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 27,
            'DiaChiId' => 36,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 29,
            'TongTien' => 285880000,
            'TrangThai' => '5',
            'created_at' => '2015-01-09 12:01:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 28,
            'DiaChiId' => 16,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 6,
            'TongTien' => 32000000,
            'TrangThai' => '2',
            'created_at' => '2016-06-02 09:07:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 29,
            'DiaChiId' => 14,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 171955000,
            'TrangThai' => '5',
            'created_at' => '2017-04-23 21:43:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 30,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 14,
            'TongTien' => 78940000,
            'TrangThai' => '4',
            'created_at' => '2018-11-14 23:25:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 31,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 17,
            'TongTien' => 182000000,
            'TrangThai' => '3',
            'created_at' => '2016-04-14 04:29:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 32,
            'DiaChiId' => 28,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 17,
            'TongTien' => 110180000,
            'TrangThai' => '4',
            'created_at' => '2018-12-12 12:37:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 33,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 19,
            'TongTien' => 144195000,
            'TrangThai' => '1',
            'created_at' => '2019-01-26 12:15:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 34,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 15,
            'TongTien' => 115980000,
            'TrangThai' => '3',
            'created_at' => '2019-12-25 02:15:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 35,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 14,
            'TongTien' => 96620000,
            'TrangThai' => '1',
            'created_at' => '2016-03-17 10:29:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 36,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 18,
            'TongTien' => 187910000,
            'TrangThai' => '3',
            'created_at' => '2019-11-22 19:24:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 37,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 113000000,
            'TrangThai' => '1',
            'created_at' => '2018-12-09 11:51:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 38,
            'DiaChiId' => 9,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 8,
            'TongTien' => 47045000,
            'TrangThai' => '5',
            'created_at' => '2018-08-25 17:09:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 39,
            'DiaChiId' => 15,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 131960000,
            'TrangThai' => '1',
            'created_at' => '2016-07-29 08:40:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 40,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 19,
            'TongTien' => 122395000,
            'TrangThai' => '4',
            'created_at' => '2016-04-21 11:23:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 41,
            'DiaChiId' => 38,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 16,
            'TongTien' => 46030000,
            'TrangThai' => '1',
            'created_at' => '2019-08-12 02:25:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 42,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 11,
            'TongTien' => 85940000,
            'TrangThai' => '4',
            'created_at' => '2018-11-15 17:37:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 43,
            'DiaChiId' => 17,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 27,
            'TongTien' => 218425000,
            'TrangThai' => '1',
            'created_at' => '2018-10-27 12:04:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 44,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 15,
            'TongTien' => 106095000,
            'TrangThai' => '5',
            'created_at' => '2015-06-27 21:31:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 45,
            'DiaChiId' => 22,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 14,
            'TongTien' => 43225000,
            'TrangThai' => '4',
            'created_at' => '2016-03-26 19:25:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 46,
            'DiaChiId' => 52,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 17,
            'TongTien' => 84620000,
            'TrangThai' => '5',
            'created_at' => '2019-08-30 23:05:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 47,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 26,
            'TongTien' => 284950000,
            'TrangThai' => '3',
            'created_at' => '2016-07-06 20:56:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 48,
            'DiaChiId' => 50,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 39320000,
            'TrangThai' => '5',
            'created_at' => '2019-06-14 22:42:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 49,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 22,
            'TongTien' => 97740000,
            'TrangThai' => '3',
            'created_at' => '2019-01-14 02:38:31',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 50,
            'DiaChiId' => 49,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 4,
            'TongTien' => 21980000,
            'TrangThai' => '3',
            'created_at' => '2017-09-03 20:22:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 51,
            'DiaChiId' => 2,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 15,
            'TongTien' => 118260000,
            'TrangThai' => '2',
            'created_at' => '2018-05-23 13:16:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 52,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 16,
            'TongTien' => 131045000,
            'TrangThai' => '4',
            'created_at' => '2017-05-11 18:30:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 53,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 8,
            'TongTien' => 12380000,
            'TrangThai' => '5',
            'created_at' => '2015-03-01 18:59:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 54,
            'DiaChiId' => 4,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 23,
            'TongTien' => 184745000,
            'TrangThai' => '5',
            'created_at' => '2019-03-21 07:53:26',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 55,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 9,
            'TongTien' => 109000000,
            'TrangThai' => '1',
            'created_at' => '2017-01-04 09:28:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 56,
            'DiaChiId' => 54,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 17,
            'TongTien' => 115325000,
            'TrangThai' => '1',
            'created_at' => '2016-03-21 12:56:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 57,
            'DiaChiId' => 47,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 24,
            'TongTien' => 107060000,
            'TrangThai' => '5',
            'created_at' => '2016-05-31 19:55:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 58,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 7,
            'TongTien' => 75000000,
            'TrangThai' => '1',
            'created_at' => '2019-09-07 20:17:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 59,
            'DiaChiId' => 27,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 5,
            'TongTien' => 16135000,
            'TrangThai' => '1',
            'created_at' => '2015-03-10 18:36:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 60,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 19,
            'TongTien' => 160230000,
            'TrangThai' => '3',
            'created_at' => '2015-03-29 08:52:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 61,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 6,
            'TongTien' => 41980000,
            'TrangThai' => '5',
            'created_at' => '2019-11-13 07:58:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 62,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 9,
            'TongTien' => 65260000,
            'TrangThai' => '4',
            'created_at' => '2018-09-30 02:04:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 63,
            'DiaChiId' => 25,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 7,
            'TongTien' => 50990000,
            'TrangThai' => '2',
            'created_at' => '2018-04-11 02:49:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 64,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 14,
            'TongTien' => 134285000,
            'TrangThai' => '5',
            'created_at' => '2018-12-01 12:45:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 65,
            'DiaChiId' => 48,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 16,
            'TongTien' => 183000000,
            'TrangThai' => '5',
            'created_at' => '2016-08-03 16:46:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 66,
            'DiaChiId' => 20,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 140000000,
            'TrangThai' => '4',
            'created_at' => '2016-01-27 21:20:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 67,
            'DiaChiId' => 32,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 234950000,
            'TrangThai' => '1',
            'created_at' => '2017-05-11 21:53:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 68,
            'DiaChiId' => 21,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 88895000,
            'TrangThai' => '1',
            'created_at' => '2018-12-27 00:31:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 69,
            'DiaChiId' => 41,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 835000,
            'TrangThai' => '5',
            'created_at' => '2016-08-01 02:22:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 70,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 17,
            'TongTien' => 111220000,
            'TrangThai' => '3',
            'created_at' => '2017-01-07 07:54:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 71,
            'DiaChiId' => 23,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 18,
            'TongTien' => 170085000,
            'TrangThai' => '2',
            'created_at' => '2016-06-10 20:58:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 72,
            'DiaChiId' => 51,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 112000000,
            'TrangThai' => '4',
            'created_at' => '2019-02-04 13:01:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 73,
            'DiaChiId' => 19,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 38,
            'TongTien' => 301420000,
            'TrangThai' => '2',
            'created_at' => '2019-01-27 06:19:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 74,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 23,
            'TongTien' => 240000000,
            'TrangThai' => '5',
            'created_at' => '2015-05-02 13:01:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 75,
            'DiaChiId' => 48,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 4,
            'TongTien' => 15980000,
            'TrangThai' => '4',
            'created_at' => '2017-06-01 11:59:32',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 76,
            'DiaChiId' => 20,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 17,
            'TongTien' => 115085000,
            'TrangThai' => '1',
            'created_at' => '2015-04-18 08:11:41',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 77,
            'DiaChiId' => 67,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 26,
            'TongTien' => 254950000,
            'TrangThai' => '5',
            'created_at' => '2019-04-19 07:37:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 78,
            'DiaChiId' => 15,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 18,
            'TongTien' => 168000000,
            'TrangThai' => '1',
            'created_at' => '2018-04-30 07:10:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 79,
            'DiaChiId' => 53,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 15,
            'TongTien' => 103240000,
            'TrangThai' => '3',
            'created_at' => '2017-03-30 11:41:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 80,
            'DiaChiId' => 24,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 11,
            'TongTien' => 79380000,
            'TrangThai' => '1',
            'created_at' => '2017-07-22 13:49:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 81,
            'DiaChiId' => 13,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 12,
            'TongTien' => 58145000,
            'TrangThai' => '3',
            'created_at' => '2019-06-02 21:49:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 82,
            'DiaChiId' => 32,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 25,
            'TongTien' => 155505000,
            'TrangThai' => '3',
            'created_at' => '2016-03-31 05:58:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 83,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 24,
            'TongTien' => 194900000,
            'TrangThai' => '5',
            'created_at' => '2019-04-01 23:25:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 84,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 26,
            'TongTien' => 202940000,
            'TrangThai' => '3',
            'created_at' => '2016-01-10 22:49:12',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 85,
            'DiaChiId' => 54,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 18,
            'TongTien' => 101920000,
            'TrangThai' => '5',
            'created_at' => '2018-02-09 04:37:07',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 86,
            'DiaChiId' => 31,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 16,
            'TongTien' => 124940000,
            'TrangThai' => '2',
            'created_at' => '2017-09-27 09:41:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 87,
            'DiaChiId' => 16,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 5,
            'TongTien' => 23000000,
            'TrangThai' => '2',
            'created_at' => '2015-02-20 07:36:54',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 88,
            'DiaChiId' => 46,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 10,
            'TongTien' => 45240000,
            'TrangThai' => '4',
            'created_at' => '2018-06-29 16:32:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 89,
            'DiaChiId' => 43,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 36,
            'TongTien' => 328550000,
            'TrangThai' => '4',
            'created_at' => '2017-01-01 03:51:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 90,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 14,
            'TongTien' => 75045000,
            'TrangThai' => '2',
            'created_at' => '2015-10-13 07:01:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 91,
            'DiaChiId' => 9,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 25,
            'TongTien' => 144005000,
            'TrangThai' => '5',
            'created_at' => '2018-04-28 12:54:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 92,
            'DiaChiId' => 45,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 11,
            'TongTien' => 86065000,
            'TrangThai' => '5',
            'created_at' => '2017-01-13 15:09:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 93,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 11,
            'TongTien' => 99995000,
            'TrangThai' => '5',
            'created_at' => '2018-01-13 20:15:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 94,
            'DiaChiId' => 6,
            'PhuongThucThanhToan' => 3,
            'TongSoLuong' => 13,
            'TongTien' => 81970000,
            'TrangThai' => '5',
            'created_at' => '2016-11-23 12:04:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 95,
            'DiaChiId' => 40,
            'PhuongThucThanhToan' => 5,
            'TongSoLuong' => 18,
            'TongTien' => 103255000,
            'TrangThai' => '2',
            'created_at' => '2017-09-27 00:19:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 96,
            'DiaChiId' => 8,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 21,
            'TongTien' => 108130000,
            'TrangThai' => '5',
            'created_at' => '2016-01-21 03:21:12',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 97,
            'DiaChiId' => 35,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 6,
            'TongTien' => 41155000,
            'TrangThai' => '4',
            'created_at' => '2018-04-27 07:44:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 98,
            'DiaChiId' => 44,
            'PhuongThucThanhToan' => 2,
            'TongSoLuong' => 10,
            'TongTien' => 59000000,
            'TrangThai' => '1',
            'created_at' => '2016-09-25 05:17:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 99,
            'DiaChiId' => 34,
            'PhuongThucThanhToan' => 1,
            'TongSoLuong' => 27,
            'TongTien' => 171380000,
            'TrangThai' => '1',
            'created_at' => '2016-05-20 13:28:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Hoadon::create([
            'id' => 100,
            'DiaChiId' => 1,
            'PhuongThucThanhToan' => 4,
            'TongSoLuong' => 0,
            'TongTien' => 0,
            'TrangThai' => '3',
            'created_at' => '2019-03-20 11:11:57',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        CT_HoaDon::create([
            'id' => 1,
            'HoaDonId' => 92,
            'SanPhamId' => 24,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 2,
            'HoaDonId' => 16,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 3,
            'HoaDonId' => 33,
            'SanPhamId' => 16,
            'SoLuong' => 1,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 9000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 4,
            'HoaDonId' => 80,
            'SanPhamId' => 19,
            'SoLuong' => 2,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 5,
            'HoaDonId' => 63,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 6,
            'HoaDonId' => 39,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 7,
            'HoaDonId' => 49,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 8,
            'HoaDonId' => 67,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 9,
            'HoaDonId' => 38,
            'SanPhamId' => 31,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 10,
            'HoaDonId' => 35,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 11,
            'HoaDonId' => 96,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 12,
            'HoaDonId' => 71,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 13,
            'HoaDonId' => 80,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 14,
            'HoaDonId' => 73,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 15,
            'HoaDonId' => 65,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 16,
            'HoaDonId' => 19,
            'SanPhamId' => 25,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 17,
            'HoaDonId' => 84,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 18,
            'HoaDonId' => 23,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 19,
            'HoaDonId' => 59,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 20,
            'HoaDonId' => 72,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 21,
            'HoaDonId' => 62,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 22,
            'HoaDonId' => 21,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 23,
            'HoaDonId' => 92,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 24,
            'HoaDonId' => 20,
            'SanPhamId' => 19,
            'SoLuong' => 2,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 25,
            'HoaDonId' => 4,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 310000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 26,
            'HoaDonId' => 66,
            'SanPhamId' => 18,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 27,
            'HoaDonId' => 42,
            'SanPhamId' => 16,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 28,
            'HoaDonId' => 89,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 29,
            'HoaDonId' => 71,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 30,
            'HoaDonId' => 40,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 31,
            'HoaDonId' => 10,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 32,
            'HoaDonId' => 12,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 33,
            'HoaDonId' => 80,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 34,
            'HoaDonId' => 81,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 35,
            'HoaDonId' => 16,
            'SanPhamId' => 31,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 36,
            'HoaDonId' => 42,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 37,
            'HoaDonId' => 13,
            'SanPhamId' => 28,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 38,
            'HoaDonId' => 43,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 39,
            'HoaDonId' => 81,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 40,
            'HoaDonId' => 86,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 41,
            'HoaDonId' => 67,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 42,
            'HoaDonId' => 65,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 43,
            'HoaDonId' => 20,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 44,
            'HoaDonId' => 16,
            'SanPhamId' => 13,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 45,
            'HoaDonId' => 13,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 46,
            'HoaDonId' => 67,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 47,
            'HoaDonId' => 99,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 48,
            'HoaDonId' => 46,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 49,
            'HoaDonId' => 73,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 50,
            'HoaDonId' => 68,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 51,
            'HoaDonId' => 29,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 52,
            'HoaDonId' => 84,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 53,
            'HoaDonId' => 29,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 54,
            'HoaDonId' => 26,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 55,
            'HoaDonId' => 68,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 56,
            'HoaDonId' => 36,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 57,
            'HoaDonId' => 49,
            'SanPhamId' => 29,
            'SoLuong' => 1,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 58,
            'HoaDonId' => 89,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 59,
            'HoaDonId' => 72,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 60,
            'HoaDonId' => 77,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 61,
            'HoaDonId' => 14,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 62,
            'HoaDonId' => 43,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 63,
            'HoaDonId' => 30,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 64,
            'HoaDonId' => 74,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 65,
            'HoaDonId' => 96,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 66,
            'HoaDonId' => 27,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 67,
            'HoaDonId' => 85,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 68,
            'HoaDonId' => 3,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 69,
            'HoaDonId' => 31,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 70,
            'HoaDonId' => 90,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 71,
            'HoaDonId' => 73,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 72,
            'HoaDonId' => 93,
            'SanPhamId' => 31,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 73,
            'HoaDonId' => 58,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 74,
            'HoaDonId' => 81,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 75,
            'HoaDonId' => 60,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 76,
            'HoaDonId' => 58,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 77,
            'HoaDonId' => 19,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 78,
            'HoaDonId' => 90,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 79,
            'HoaDonId' => 40,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 80,
            'HoaDonId' => 41,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 81,
            'HoaDonId' => 33,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 82,
            'HoaDonId' => 76,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 83,
            'HoaDonId' => 51,
            'SanPhamId' => 8,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 84,
            'HoaDonId' => 87,
            'SanPhamId' => 5,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 85,
            'HoaDonId' => 60,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 86,
            'HoaDonId' => 55,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 87,
            'HoaDonId' => 90,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 88,
            'HoaDonId' => 64,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 89,
            'HoaDonId' => 36,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 90,
            'HoaDonId' => 47,
            'SanPhamId' => 2,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 91,
            'HoaDonId' => 43,
            'SanPhamId' => 18,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 92,
            'HoaDonId' => 55,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 93,
            'HoaDonId' => 95,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 94,
            'HoaDonId' => 32,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 95,
            'HoaDonId' => 6,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 96,
            'HoaDonId' => 68,
            'SanPhamId' => 16,
            'SoLuong' => 1,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 9000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 97,
            'HoaDonId' => 13,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 98,
            'HoaDonId' => 1,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 99,
            'HoaDonId' => 37,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 100,
            'HoaDonId' => 94,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 101,
            'HoaDonId' => 89,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 102,
            'HoaDonId' => 54,
            'SanPhamId' => 23,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 12990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 103,
            'HoaDonId' => 31,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 104,
            'HoaDonId' => 82,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 105,
            'HoaDonId' => 80,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 380000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 106,
            'HoaDonId' => 78,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 107,
            'HoaDonId' => 12,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 108,
            'HoaDonId' => 89,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 109,
            'HoaDonId' => 9,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 110,
            'HoaDonId' => 3,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 111,
            'HoaDonId' => 73,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 112,
            'HoaDonId' => 92,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 113,
            'HoaDonId' => 27,
            'SanPhamId' => 18,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 114,
            'HoaDonId' => 35,
            'SanPhamId' => 19,
            'SoLuong' => 1,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 115,
            'HoaDonId' => 17,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 116,
            'HoaDonId' => 82,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 117,
            'HoaDonId' => 91,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 118,
            'HoaDonId' => 85,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 119,
            'HoaDonId' => 71,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 120,
            'HoaDonId' => 9,
            'SanPhamId' => 22,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 121,
            'HoaDonId' => 49,
            'SanPhamId' => 25,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 122,
            'HoaDonId' => 91,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 123,
            'HoaDonId' => 18,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 124,
            'HoaDonId' => 42,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 125,
            'HoaDonId' => 23,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 126,
            'HoaDonId' => 8,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 127,
            'HoaDonId' => 75,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 128,
            'HoaDonId' => 45,
            'SanPhamId' => 6,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 129,
            'HoaDonId' => 77,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 130,
            'HoaDonId' => 46,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 131,
            'HoaDonId' => 9,
            'SanPhamId' => 18,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 132,
            'HoaDonId' => 49,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 133,
            'HoaDonId' => 34,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 134,
            'HoaDonId' => 81,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 135,
            'HoaDonId' => 84,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 136,
            'HoaDonId' => 40,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 137,
            'HoaDonId' => 6,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 138,
            'HoaDonId' => 53,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 139,
            'HoaDonId' => 76,
            'SanPhamId' => 8,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 140,
            'HoaDonId' => 16,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 141,
            'HoaDonId' => 18,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 142,
            'HoaDonId' => 47,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 143,
            'HoaDonId' => 13,
            'SanPhamId' => 21,
            'SoLuong' => 5,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 144,
            'HoaDonId' => 99,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 145,
            'HoaDonId' => 33,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 146,
            'HoaDonId' => 43,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 147,
            'HoaDonId' => 95,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 148,
            'HoaDonId' => 3,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 149,
            'HoaDonId' => 76,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 150,
            'HoaDonId' => 99,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 151,
            'HoaDonId' => 24,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 152,
            'HoaDonId' => 16,
            'SanPhamId' => 21,
            'SoLuong' => 3,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 153,
            'HoaDonId' => 27,
            'SanPhamId' => 13,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 154,
            'HoaDonId' => 2,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 155,
            'HoaDonId' => 65,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 156,
            'HoaDonId' => 98,
            'SanPhamId' => 22,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 157,
            'HoaDonId' => 52,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 158,
            'HoaDonId' => 20,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 159,
            'HoaDonId' => 10,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 160,
            'HoaDonId' => 79,
            'SanPhamId' => 22,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 161,
            'HoaDonId' => 63,
            'SanPhamId' => 24,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 162,
            'HoaDonId' => 6,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 163,
            'HoaDonId' => 82,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 164,
            'HoaDonId' => 34,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 165,
            'HoaDonId' => 89,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 166,
            'HoaDonId' => 73,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 167,
            'HoaDonId' => 20,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 168,
            'HoaDonId' => 83,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 169,
            'HoaDonId' => 14,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 170,
            'HoaDonId' => 14,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 171,
            'HoaDonId' => 40,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 172,
            'HoaDonId' => 85,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 173,
            'HoaDonId' => 4,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 174,
            'HoaDonId' => 17,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 175,
            'HoaDonId' => 97,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 176,
            'HoaDonId' => 86,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 177,
            'HoaDonId' => 24,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 178,
            'HoaDonId' => 24,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 179,
            'HoaDonId' => 27,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 180,
            'HoaDonId' => 74,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 181,
            'HoaDonId' => 74,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 182,
            'HoaDonId' => 5,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 183,
            'HoaDonId' => 25,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 184,
            'HoaDonId' => 2,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 185,
            'HoaDonId' => 69,
            'SanPhamId' => 32,
            'SoLuong' => 5,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 475000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 186,
            'HoaDonId' => 95,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 187,
            'HoaDonId' => 73,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 188,
            'HoaDonId' => 47,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 189,
            'HoaDonId' => 28,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 190,
            'HoaDonId' => 97,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 191,
            'HoaDonId' => 23,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 192,
            'HoaDonId' => 56,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 193,
            'HoaDonId' => 95,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 194,
            'HoaDonId' => 45,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 195,
            'HoaDonId' => 57,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 196,
            'HoaDonId' => 49,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 197,
            'HoaDonId' => 18,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 198,
            'HoaDonId' => 59,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 199,
            'HoaDonId' => 19,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 200,
            'HoaDonId' => 72,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 201,
            'HoaDonId' => 18,
            'SanPhamId' => 19,
            'SoLuong' => 3,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 202,
            'HoaDonId' => 25,
            'SanPhamId' => 32,
            'SoLuong' => 2,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 190000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 203,
            'HoaDonId' => 72,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 204,
            'HoaDonId' => 43,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 205,
            'HoaDonId' => 39,
            'SanPhamId' => 10,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 206,
            'HoaDonId' => 15,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 207,
            'HoaDonId' => 36,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 208,
            'HoaDonId' => 89,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 209,
            'HoaDonId' => 29,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 210,
            'HoaDonId' => 3,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 211,
            'HoaDonId' => 1,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 212,
            'HoaDonId' => 37,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 213,
            'HoaDonId' => 94,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 214,
            'HoaDonId' => 19,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 215,
            'HoaDonId' => 70,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 216,
            'HoaDonId' => 60,
            'SanPhamId' => 23,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 12990000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 217,
            'HoaDonId' => 84,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 218,
            'HoaDonId' => 57,
            'SanPhamId' => 21,
            'SoLuong' => 3,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 219,
            'HoaDonId' => 57,
            'SanPhamId' => 11,
            'SoLuong' => 1,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 5000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 220,
            'HoaDonId' => 88,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 221,
            'HoaDonId' => 29,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 222,
            'HoaDonId' => 73,
            'SanPhamId' => 2,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 223,
            'HoaDonId' => 13,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 224,
            'HoaDonId' => 48,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 225,
            'HoaDonId' => 2,
            'SanPhamId' => 11,
            'SoLuong' => 1,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 5000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 226,
            'HoaDonId' => 53,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 227,
            'HoaDonId' => 52,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 228,
            'HoaDonId' => 22,
            'SanPhamId' => 17,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 229,
            'HoaDonId' => 56,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 230,
            'HoaDonId' => 87,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 231,
            'HoaDonId' => 44,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 232,
            'HoaDonId' => 64,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 233,
            'HoaDonId' => 88,
            'SanPhamId' => 4,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 234,
            'HoaDonId' => 91,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 235,
            'HoaDonId' => 99,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 236,
            'HoaDonId' => 41,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 237,
            'HoaDonId' => 39,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 238,
            'HoaDonId' => 57,
            'SanPhamId' => 19,
            'SoLuong' => 4,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 239,
            'HoaDonId' => 28,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 240,
            'HoaDonId' => 86,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 241,
            'HoaDonId' => 57,
            'SanPhamId' => 1,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 242,
            'HoaDonId' => 31,
            'SanPhamId' => 7,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 243,
            'HoaDonId' => 70,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 244,
            'HoaDonId' => 76,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 245,
            'HoaDonId' => 25,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 246,
            'HoaDonId' => 70,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 247,
            'HoaDonId' => 61,
            'SanPhamId' => 23,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 25980000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 248,
            'HoaDonId' => 71,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 249,
            'HoaDonId' => 16,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 250,
            'HoaDonId' => 35,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 251,
            'HoaDonId' => 68,
            'SanPhamId' => 29,
            'SoLuong' => 2,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 130000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 252,
            'HoaDonId' => 9,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 253,
            'HoaDonId' => 12,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 254,
            'HoaDonId' => 27,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 255,
            'HoaDonId' => 52,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 256,
            'HoaDonId' => 96,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 257,
            'HoaDonId' => 6,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 258,
            'HoaDonId' => 60,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 259,
            'HoaDonId' => 45,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 260,
            'HoaDonId' => 54,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 261,
            'HoaDonId' => 85,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 262,
            'HoaDonId' => 85,
            'SanPhamId' => 29,
            'SoLuong' => 3,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 195000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 263,
            'HoaDonId' => 37,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 264,
            'HoaDonId' => 23,
            'SanPhamId' => 8,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 265,
            'HoaDonId' => 93,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 266,
            'HoaDonId' => 74,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 267,
            'HoaDonId' => 22,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 268,
            'HoaDonId' => 67,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 269,
            'HoaDonId' => 20,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 270,
            'HoaDonId' => 31,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 271,
            'HoaDonId' => 34,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 272,
            'HoaDonId' => 62,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 273,
            'HoaDonId' => 91,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 274,
            'HoaDonId' => 29,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 275,
            'HoaDonId' => 62,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 276,
            'HoaDonId' => 52,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 277,
            'HoaDonId' => 27,
            'SanPhamId' => 14,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 278,
            'HoaDonId' => 4,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 279,
            'HoaDonId' => 41,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 280,
            'HoaDonId' => 81,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 281,
            'HoaDonId' => 30,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 282,
            'HoaDonId' => 24,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 283,
            'HoaDonId' => 79,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 284,
            'HoaDonId' => 56,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 285,
            'HoaDonId' => 4,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 286,
            'HoaDonId' => 32,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 287,
            'HoaDonId' => 19,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 288,
            'HoaDonId' => 9,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 289,
            'HoaDonId' => 54,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 290,
            'HoaDonId' => 52,
            'SanPhamId' => 3,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 291,
            'HoaDonId' => 41,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 292,
            'HoaDonId' => 54,
            'SanPhamId' => 16,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 293,
            'HoaDonId' => 14,
            'SanPhamId' => 26,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 21980000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 294,
            'HoaDonId' => 95,
            'SanPhamId' => 4,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 295,
            'HoaDonId' => 82,
            'SanPhamId' => 6,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 296,
            'HoaDonId' => 5,
            'SanPhamId' => 20,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 297,
            'HoaDonId' => 78,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 298,
            'HoaDonId' => 26,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 299,
            'HoaDonId' => 96,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 300,
            'HoaDonId' => 86,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 301,
            'HoaDonId' => 73,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 302,
            'HoaDonId' => 84,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 303,
            'HoaDonId' => 43,
            'SanPhamId' => 30,
            'SoLuong' => 3,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 465000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 304,
            'HoaDonId' => 29,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 305,
            'HoaDonId' => 83,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 306,
            'HoaDonId' => 68,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 307,
            'HoaDonId' => 94,
            'SanPhamId' => 12,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 308,
            'HoaDonId' => 36,
            'SanPhamId' => 1,
            'SoLuong' => 4,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 60000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 309,
            'HoaDonId' => 47,
            'SanPhamId' => 1,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 310,
            'HoaDonId' => 74,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 311,
            'HoaDonId' => 99,
            'SanPhamId' => 32,
            'SoLuong' => 4,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 380000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 312,
            'HoaDonId' => 89,
            'SanPhamId' => 24,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 27960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 313,
            'HoaDonId' => 12,
            'SanPhamId' => 11,
            'SoLuong' => 5,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 25000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 314,
            'HoaDonId' => 29,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 315,
            'HoaDonId' => 78,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 316,
            'HoaDonId' => 70,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 317,
            'HoaDonId' => 45,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 318,
            'HoaDonId' => 66,
            'SanPhamId' => 2,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 319,
            'HoaDonId' => 84,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 320,
            'HoaDonId' => 64,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 321,
            'HoaDonId' => 29,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 322,
            'HoaDonId' => 76,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 323,
            'HoaDonId' => 1,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 324,
            'HoaDonId' => 65,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 325,
            'HoaDonId' => 30,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 326,
            'HoaDonId' => 77,
            'SanPhamId' => 14,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 327,
            'HoaDonId' => 56,
            'SanPhamId' => 10,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 328,
            'HoaDonId' => 33,
            'SanPhamId' => 31,
            'SoLuong' => 2,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 90000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 329,
            'HoaDonId' => 78,
            'SanPhamId' => 15,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 44000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 330,
            'HoaDonId' => 18,
            'SanPhamId' => 13,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 331,
            'HoaDonId' => 76,
            'SanPhamId' => 2,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 332,
            'HoaDonId' => 47,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 333,
            'HoaDonId' => 97,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 334,
            'HoaDonId' => 83,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 335,
            'HoaDonId' => 39,
            'SanPhamId' => 9,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 336,
            'HoaDonId' => 35,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 337,
            'HoaDonId' => 51,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 338,
            'HoaDonId' => 37,
            'SanPhamId' => 16,
            'SoLuong' => 5,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 339,
            'HoaDonId' => 91,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 340,
            'HoaDonId' => 22,
            'SanPhamId' => 26,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 10990000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 341,
            'HoaDonId' => 2,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 342,
            'HoaDonId' => 23,
            'SanPhamId' => 3,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 343,
            'HoaDonId' => 14,
            'SanPhamId' => 28,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 344,
            'HoaDonId' => 12,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 345,
            'HoaDonId' => 89,
            'SanPhamId' => 9,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 346,
            'HoaDonId' => 77,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 347,
            'HoaDonId' => 91,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 348,
            'HoaDonId' => 42,
            'SanPhamId' => 7,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 349,
            'HoaDonId' => 13,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 350,
            'HoaDonId' => 25,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 351,
            'HoaDonId' => 19,
            'SanPhamId' => 2,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 39000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 352,
            'HoaDonId' => 53,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 353,
            'HoaDonId' => 65,
            'SanPhamId' => 6,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 354,
            'HoaDonId' => 86,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 355,
            'HoaDonId' => 82,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 356,
            'HoaDonId' => 32,
            'SanPhamId' => 22,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 357,
            'HoaDonId' => 82,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 358,
            'HoaDonId' => 57,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 359,
            'HoaDonId' => 10,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 360,
            'HoaDonId' => 13,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 361,
            'HoaDonId' => 10,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 362,
            'HoaDonId' => 93,
            'SanPhamId' => 23,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 64950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 363,
            'HoaDonId' => 33,
            'SanPhamId' => 30,
            'SoLuong' => 1,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 155000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 364,
            'HoaDonId' => 20,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 365,
            'HoaDonId' => 22,
            'SanPhamId' => 30,
            'SoLuong' => 3,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 465000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 366,
            'HoaDonId' => 74,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 367,
            'HoaDonId' => 75,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 368,
            'HoaDonId' => 77,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 369,
            'HoaDonId' => 79,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 370,
            'HoaDonId' => 57,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 371,
            'HoaDonId' => 2,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 372,
            'HoaDonId' => 54,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 373,
            'HoaDonId' => 96,
            'SanPhamId' => 15,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 374,
            'HoaDonId' => 27,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 375,
            'HoaDonId' => 71,
            'SanPhamId' => 19,
            'SoLuong' => 5,
            'GiaNhap' => 9000000,
            'GiaBan' => 10000000,
            'GiaGiam' => 0,
            'ThanhTien' => 50000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 376,
            'HoaDonId' => 38,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 377,
            'HoaDonId' => 83,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 378,
            'HoaDonId' => 51,
            'SanPhamId' => 3,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 379,
            'HoaDonId' => 88,
            'SanPhamId' => 7,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 380,
            'HoaDonId' => 55,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 381,
            'HoaDonId' => 95,
            'SanPhamId' => 25,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 382,
            'HoaDonId' => 86,
            'SanPhamId' => 14,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 383,
            'HoaDonId' => 96,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 384,
            'HoaDonId' => 48,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 385,
            'HoaDonId' => 83,
            'SanPhamId' => 18,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 386,
            'HoaDonId' => 12,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 387,
            'HoaDonId' => 95,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 388,
            'HoaDonId' => 61,
            'SanPhamId' => 4,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 389,
            'HoaDonId' => 49,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 390,
            'HoaDonId' => 1,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 391,
            'HoaDonId' => 57,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 392,
            'HoaDonId' => 26,
            'SanPhamId' => 11,
            'SoLuong' => 3,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 393,
            'HoaDonId' => 90,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 394,
            'HoaDonId' => 14,
            'SanPhamId' => 21,
            'SoLuong' => 5,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 395,
            'HoaDonId' => 54,
            'SanPhamId' => 30,
            'SoLuong' => 4,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 620000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 396,
            'HoaDonId' => 10,
            'SanPhamId' => 16,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 397,
            'HoaDonId' => 15,
            'SanPhamId' => 3,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 398,
            'HoaDonId' => 60,
            'SanPhamId' => 27,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 3990000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 399,
            'HoaDonId' => 34,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 400,
            'HoaDonId' => 10,
            'SanPhamId' => 27,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 19950000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 401,
            'HoaDonId' => 85,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 402,
            'HoaDonId' => 59,
            'SanPhamId' => 28,
            'SoLuong' => 1,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 403,
            'HoaDonId' => 66,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 404,
            'HoaDonId' => 78,
            'SanPhamId' => 8,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 405,
            'HoaDonId' => 46,
            'SanPhamId' => 9,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 406,
            'HoaDonId' => 54,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 407,
            'HoaDonId' => 63,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 408,
            'HoaDonId' => 25,
            'SanPhamId' => 6,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 7000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 409,
            'HoaDonId' => 76,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 410,
            'HoaDonId' => 43,
            'SanPhamId' => 8,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 411,
            'HoaDonId' => 98,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 412,
            'HoaDonId' => 93,
            'SanPhamId' => 5,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 413,
            'HoaDonId' => 15,
            'SanPhamId' => 5,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 414,
            'HoaDonId' => 32,
            'SanPhamId' => 1,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 415,
            'HoaDonId' => 25,
            'SanPhamId' => 5,
            'SoLuong' => 4,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 28000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 416,
            'HoaDonId' => 69,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 417,
            'HoaDonId' => 44,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 418,
            'HoaDonId' => 37,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 419,
            'HoaDonId' => 92,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 420,
            'HoaDonId' => 50,
            'SanPhamId' => 25,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 421,
            'HoaDonId' => 81,
            'SanPhamId' => 25,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 20970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 422,
            'HoaDonId' => 60,
            'SanPhamId' => 20,
            'SoLuong' => 4,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 32000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 423,
            'HoaDonId' => 46,
            'SanPhamId' => 4,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 424,
            'HoaDonId' => 6,
            'SanPhamId' => 20,
            'SoLuong' => 3,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 425,
            'HoaDonId' => 51,
            'SanPhamId' => 18,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 426,
            'HoaDonId' => 7,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 427,
            'HoaDonId' => 41,
            'SanPhamId' => 27,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 11970000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 428,
            'HoaDonId' => 38,
            'SanPhamId' => 11,
            'SoLuong' => 4,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 429,
            'HoaDonId' => 27,
            'SanPhamId' => 24,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 430,
            'HoaDonId' => 77,
            'SanPhamId' => 5,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 35000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 431,
            'HoaDonId' => 51,
            'SanPhamId' => 10,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 432,
            'HoaDonId' => 4,
            'SanPhamId' => 26,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 32970000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 433,
            'HoaDonId' => 67,
            'SanPhamId' => 27,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 19950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 434,
            'HoaDonId' => 21,
            'SanPhamId' => 30,
            'SoLuong' => 5,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 775000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 435,
            'HoaDonId' => 73,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 436,
            'HoaDonId' => 96,
            'SanPhamId' => 24,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 13980000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 437,
            'HoaDonId' => 84,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 438,
            'HoaDonId' => 49,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 439,
            'HoaDonId' => 63,
            'SanPhamId' => 10,
            'SoLuong' => 1,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 15000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 440,
            'HoaDonId' => 70,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 441,
            'HoaDonId' => 40,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 442,
            'HoaDonId' => 47,
            'SanPhamId' => 20,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 443,
            'HoaDonId' => 83,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 444,
            'HoaDonId' => 10,
            'SanPhamId' => 31,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 445,
            'HoaDonId' => 89,
            'SanPhamId' => 12,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 446,
            'HoaDonId' => 79,
            'SanPhamId' => 14,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 447,
            'HoaDonId' => 84,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 448,
            'HoaDonId' => 33,
            'SanPhamId' => 25,
            'SoLuong' => 5,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 34950000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 449,
            'HoaDonId' => 89,
            'SanPhamId' => 13,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 450,
            'HoaDonId' => 99,
            'SanPhamId' => 20,
            'SoLuong' => 2,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 16000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 451,
            'HoaDonId' => 48,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 452,
            'HoaDonId' => 16,
            'SanPhamId' => 26,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 54950000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 453,
            'HoaDonId' => 91,
            'SanPhamId' => 14,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 52000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 454,
            'HoaDonId' => 43,
            'SanPhamId' => 15,
            'SoLuong' => 3,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 33000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 455,
            'HoaDonId' => 36,
            'SanPhamId' => 27,
            'SoLuong' => 4,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 15960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 456,
            'HoaDonId' => 67,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 457,
            'HoaDonId' => 8,
            'SanPhamId' => 9,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 458,
            'HoaDonId' => 16,
            'SanPhamId' => 24,
            'SoLuong' => 1,
            'GiaNhap' => 6000000,
            'GiaBan' => 6990000,
            'GiaGiam' => 0,
            'ThanhTien' => 6990000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 459,
            'HoaDonId' => 30,
            'SanPhamId' => 21,
            'SoLuong' => 4,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 24000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 460,
            'HoaDonId' => 99,
            'SanPhamId' => 4,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 461,
            'HoaDonId' => 77,
            'SanPhamId' => 2,
            'SoLuong' => 5,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 65000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 462,
            'HoaDonId' => 40,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 463,
            'HoaDonId' => 26,
            'SanPhamId' => 17,
            'SoLuong' => 2,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 18000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 464,
            'HoaDonId' => 19,
            'SanPhamId' => 29,
            'SoLuong' => 4,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 260000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 465,
            'HoaDonId' => 25,
            'SanPhamId' => 29,
            'SoLuong' => 5,
            'GiaNhap' => 60000,
            'GiaBan' => 65000,
            'GiaGiam' => 0,
            'ThanhTien' => 325000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 466,
            'HoaDonId' => 44,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 467,
            'HoaDonId' => 89,
            'SanPhamId' => 7,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 468,
            'HoaDonId' => 94,
            'SanPhamId' => 9,
            'SoLuong' => 5,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 40000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 469,
            'HoaDonId' => 32,
            'SanPhamId' => 28,
            'SoLuong' => 4,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 180000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 470,
            'HoaDonId' => 69,
            'SanPhamId' => 28,
            'SoLuong' => 3,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 135000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 471,
            'HoaDonId' => 50,
            'SanPhamId' => 22,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 472,
            'HoaDonId' => 27,
            'SanPhamId' => 23,
            'SoLuong' => 4,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 51960000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 473,
            'HoaDonId' => 70,
            'SanPhamId' => 12,
            'SoLuong' => 5,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 20000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 474,
            'HoaDonId' => 98,
            'SanPhamId' => 17,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 475,
            'HoaDonId' => 88,
            'SanPhamId' => 27,
            'SoLuong' => 2,
            'GiaNhap' => 3000000,
            'GiaBan' => 3990000,
            'GiaGiam' => 0,
            'ThanhTien' => 7980000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 476,
            'HoaDonId' => 99,
            'SanPhamId' => 7,
            'SoLuong' => 2,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 22000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 477,
            'HoaDonId' => 44,
            'SanPhamId' => 22,
            'SoLuong' => 3,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 478,
            'HoaDonId' => 21,
            'SanPhamId' => 2,
            'SoLuong' => 1,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 13000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 479,
            'HoaDonId' => 60,
            'SanPhamId' => 32,
            'SoLuong' => 1,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 95000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 480,
            'HoaDonId' => 73,
            'SanPhamId' => 31,
            'SoLuong' => 5,
            'GiaNhap' => 40000,
            'GiaBan' => 45000,
            'GiaGiam' => 0,
            'ThanhTien' => 225000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 481,
            'HoaDonId' => 89,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 482,
            'HoaDonId' => 68,
            'SanPhamId' => 20,
            'SoLuong' => 1,
            'GiaNhap' => 7000000,
            'GiaBan' => 8000000,
            'GiaGiam' => 0,
            'ThanhTien' => 8000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 483,
            'HoaDonId' => 31,
            'SanPhamId' => 6,
            'SoLuong' => 2,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 14000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 484,
            'HoaDonId' => 21,
            'SanPhamId' => 1,
            'SoLuong' => 2,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 30000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 485,
            'HoaDonId' => 40,
            'SanPhamId' => 11,
            'SoLuong' => 2,
            'GiaNhap' => 4000000,
            'GiaBan' => 5000000,
            'GiaGiam' => 0,
            'ThanhTien' => 10000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 486,
            'HoaDonId' => 21,
            'SanPhamId' => 15,
            'SoLuong' => 1,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 11000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 487,
            'HoaDonId' => 48,
            'SanPhamId' => 6,
            'SoLuong' => 3,
            'GiaNhap' => 6000000,
            'GiaBan' => 7000000,
            'GiaGiam' => 0,
            'ThanhTien' => 21000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 488,
            'HoaDonId' => 64,
            'SanPhamId' => 32,
            'SoLuong' => 3,
            'GiaNhap' => 90000,
            'GiaBan' => 95000,
            'GiaGiam' => 0,
            'ThanhTien' => 285000,
            'Star' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 489,
            'HoaDonId' => 51,
            'SanPhamId' => 30,
            'SoLuong' => 2,
            'GiaNhap' => 150000,
            'GiaBan' => 155000,
            'GiaGiam' => 0,
            'ThanhTien' => 310000,
            'Star' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 490,
            'HoaDonId' => 97,
            'SanPhamId' => 21,
            'SoLuong' => 2,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 12000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 491,
            'HoaDonId' => 73,
            'SanPhamId' => 10,
            'SoLuong' => 3,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 45000000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 492,
            'HoaDonId' => 60,
            'SanPhamId' => 16,
            'SoLuong' => 3,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 27000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 493,
            'HoaDonId' => 35,
            'SanPhamId' => 21,
            'SoLuong' => 1,
            'GiaNhap' => 5000000,
            'GiaBan' => 6000000,
            'GiaGiam' => 0,
            'ThanhTien' => 6000000,
            'Star' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 494,
            'HoaDonId' => 91,
            'SanPhamId' => 26,
            'SoLuong' => 4,
            'GiaNhap' => 10000000,
            'GiaBan' => 10990000,
            'GiaGiam' => 0,
            'ThanhTien' => 43960000,
            'Star' => 0,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 495,
            'HoaDonId' => 23,
            'SanPhamId' => 23,
            'SoLuong' => 3,
            'GiaNhap' => 12000000,
            'GiaBan' => 12990000,
            'GiaGiam' => 0,
            'ThanhTien' => 38970000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 496,
            'HoaDonId' => 60,
            'SanPhamId' => 15,
            'SoLuong' => 5,
            'GiaNhap' => 10000000,
            'GiaBan' => 11000000,
            'GiaGiam' => 0,
            'ThanhTien' => 55000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 497,
            'HoaDonId' => 8,
            'SanPhamId' => 13,
            'SoLuong' => 2,
            'GiaNhap' => 12000000,
            'GiaBan' => 13000000,
            'GiaGiam' => 0,
            'ThanhTien' => 26000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 498,
            'HoaDonId' => 15,
            'SanPhamId' => 10,
            'SoLuong' => 5,
            'GiaNhap' => 14000000,
            'GiaBan' => 15000000,
            'GiaGiam' => 0,
            'ThanhTien' => 75000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 499,
            'HoaDonId' => 34,
            'SanPhamId' => 17,
            'SoLuong' => 4,
            'GiaNhap' => 8000000,
            'GiaBan' => 9000000,
            'GiaGiam' => 0,
            'ThanhTien' => 36000000,
            'Star' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        CT_HoaDon::create([
            'id' => 500,
            'HoaDonId' => 95,
            'SanPhamId' => 12,
            'SoLuong' => 1,
            'GiaNhap' => 3000000,
            'GiaBan' => 4000000,
            'GiaGiam' => 0,
            'ThanhTien' => 4000000,
            'Star' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);

        Lichsuvanchuyen::create([
            'id' => 1,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-05 17:36:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 2,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-13 08:25:54',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 3,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-09 02:03:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 4,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-07 21:14:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 5,
            'HoaDonId' => 72,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-03 04:55:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 6,
            'HoaDonId' => 65,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-14 03:43:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 7,
            'HoaDonId' => 6,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-20 18:01:41',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 8,
            'HoaDonId' => 48,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-27 11:13:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 9,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-10-06 04:58:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 10,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-22 07:44:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 11,
            'HoaDonId' => 48,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-24 14:46:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 12,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-13 18:19:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 13,
            'HoaDonId' => 83,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-23 07:00:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 14,
            'HoaDonId' => 57,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-19 17:22:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 15,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-15 09:41:34',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 16,
            'HoaDonId' => 53,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-12 18:25:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 17,
            'HoaDonId' => 44,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-04 15:51:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 18,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-03 16:47:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 19,
            'HoaDonId' => 38,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-25 09:16:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 20,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-08-09 08:29:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 21,
            'HoaDonId' => 65,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-27 15:27:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 22,
            'HoaDonId' => 97,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-04 19:26:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 23,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-28 16:03:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 24,
            'HoaDonId' => 72,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-27 20:46:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 25,
            'HoaDonId' => 26,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-08-31 01:00:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 26,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-04 23:15:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 27,
            'HoaDonId' => 97,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-26 19:57:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 28,
            'HoaDonId' => 97,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-18 10:10:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 29,
            'HoaDonId' => 7,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-21 19:30:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 30,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-29 03:25:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 31,
            'HoaDonId' => 38,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-30 06:42:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 32,
            'HoaDonId' => 15,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-19 11:47:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 33,
            'HoaDonId' => 89,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-16 23:14:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 34,
            'HoaDonId' => 69,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-09-07 10:47:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 35,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-15 04:28:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 36,
            'HoaDonId' => 52,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-27 03:24:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 37,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-24 13:40:04',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 38,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-29 22:20:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 39,
            'HoaDonId' => 7,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-22 00:54:34',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 40,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-08 05:14:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 41,
            'HoaDonId' => 53,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-31 01:23:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 42,
            'HoaDonId' => 23,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-12 06:32:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 43,
            'HoaDonId' => 83,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-21 05:52:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 44,
            'HoaDonId' => 16,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-12 10:40:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 45,
            'HoaDonId' => 26,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-09 06:25:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 46,
            'HoaDonId' => 42,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-05 23:37:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 47,
            'HoaDonId' => 72,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-22 12:29:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 48,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-10 02:29:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 49,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-11 04:36:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 50,
            'HoaDonId' => 38,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-13 03:47:08',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 51,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-01 11:28:14',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 52,
            'HoaDonId' => 25,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-30 12:36:13',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 53,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-20 02:53:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 54,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-30 02:14:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 55,
            'HoaDonId' => 45,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-13 10:58:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 56,
            'HoaDonId' => 69,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-25 17:27:30',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 57,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-18 18:05:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 58,
            'HoaDonId' => 77,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-05 08:05:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 59,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-11 19:20:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 60,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-18 00:02:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 61,
            'HoaDonId' => 54,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-12 14:51:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 62,
            'HoaDonId' => 93,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-29 19:37:31',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 63,
            'HoaDonId' => 83,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-08-23 00:33:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 64,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-01 22:49:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 65,
            'HoaDonId' => 92,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-03 13:31:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 66,
            'HoaDonId' => 45,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-01 04:14:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 67,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-29 02:13:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 68,
            'HoaDonId' => 42,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-19 06:52:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 69,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-02 05:20:28',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 70,
            'HoaDonId' => 29,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-15 01:40:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 71,
            'HoaDonId' => 44,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-12 03:28:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 72,
            'HoaDonId' => 16,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-02-09 22:46:33',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 73,
            'HoaDonId' => 61,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-08 11:44:14',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 74,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-30 14:10:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 75,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-26 18:18:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 76,
            'HoaDonId' => 89,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-30 16:19:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 77,
            'HoaDonId' => 52,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-02 17:36:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 78,
            'HoaDonId' => 53,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-04 22:14:28',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 79,
            'HoaDonId' => 93,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-20 19:05:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 80,
            'HoaDonId' => 19,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-01 17:43:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 81,
            'HoaDonId' => 92,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-10 15:27:15',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 82,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-15 05:24:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 83,
            'HoaDonId' => 30,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-24 16:58:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 84,
            'HoaDonId' => 25,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-10-04 15:50:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 85,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-24 21:01:16',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 86,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-16 08:43:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 87,
            'HoaDonId' => 23,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-08-09 14:06:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 88,
            'HoaDonId' => 57,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-09-05 02:40:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 89,
            'HoaDonId' => 16,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-12 19:01:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 90,
            'HoaDonId' => 30,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-21 01:10:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 91,
            'HoaDonId' => 44,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-18 05:19:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 92,
            'HoaDonId' => 93,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-10 06:10:34',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 93,
            'HoaDonId' => 29,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-01 10:31:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 94,
            'HoaDonId' => 29,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-23 20:10:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 95,
            'HoaDonId' => 97,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-09 03:12:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 96,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-21 07:31:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 97,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-08 19:03:26',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 98,
            'HoaDonId' => 77,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-15 17:46:48',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 99,
            'HoaDonId' => 7,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-11 04:51:34',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 100,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-07 12:20:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 101,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-23 05:57:12',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 102,
            'HoaDonId' => 54,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-27 04:48:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 103,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-27 05:36:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 104,
            'HoaDonId' => 23,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-02 23:11:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 105,
            'HoaDonId' => 85,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-30 06:42:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 106,
            'HoaDonId' => 15,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-01 07:56:32',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 107,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-23 19:08:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 108,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-24 08:49:28',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 109,
            'HoaDonId' => 61,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-26 11:20:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 110,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-15 07:48:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 111,
            'HoaDonId' => 44,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-03 01:16:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 112,
            'HoaDonId' => 16,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-10 21:11:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 113,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-24 21:35:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 114,
            'HoaDonId' => 29,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-27 02:13:37',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 115,
            'HoaDonId' => 19,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-27 07:25:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 116,
            'HoaDonId' => 48,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-02 01:26:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 117,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-19 04:08:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 118,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-12 02:45:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 119,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-30 19:27:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 120,
            'HoaDonId' => 15,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-17 13:09:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 121,
            'HoaDonId' => 26,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-25 01:01:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 122,
            'HoaDonId' => 19,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-16 00:00:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 123,
            'HoaDonId' => 92,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-21 09:13:19',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 124,
            'HoaDonId' => 94,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-11-26 11:59:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 125,
            'HoaDonId' => 61,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-22 15:06:23',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 126,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-16 08:50:53',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 127,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-17 08:06:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 128,
            'HoaDonId' => 53,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-11-14 14:08:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 129,
            'HoaDonId' => 30,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-20 10:06:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 130,
            'HoaDonId' => 38,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-12 03:41:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 131,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-10 19:55:24',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 132,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-02-08 08:15:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 133,
            'HoaDonId' => 25,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-17 13:51:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 134,
            'HoaDonId' => 45,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-07 23:00:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 135,
            'HoaDonId' => 94,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-22 19:34:43',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 136,
            'HoaDonId' => 26,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-03 00:55:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 137,
            'HoaDonId' => 23,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-22 03:17:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 138,
            'HoaDonId' => 72,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-31 13:19:31',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 139,
            'HoaDonId' => 46,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-04 23:23:41',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 140,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-26 10:07:13',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 141,
            'HoaDonId' => 30,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-16 14:04:22',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 142,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-19 03:45:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 143,
            'HoaDonId' => 72,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-15 06:11:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 144,
            'HoaDonId' => 74,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-08 16:22:14',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 145,
            'HoaDonId' => 65,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-10 01:21:40',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 146,
            'HoaDonId' => 93,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-04 01:36:17',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 147,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-10 00:06:20',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 148,
            'HoaDonId' => 54,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-27 23:05:52',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 149,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-01-21 05:33:49',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 150,
            'HoaDonId' => 66,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-26 16:27:11',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 151,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-27 23:29:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 152,
            'HoaDonId' => 6,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-01-08 18:16:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 153,
            'HoaDonId' => 69,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-05-20 10:54:09',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 154,
            'HoaDonId' => 54,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-08-19 14:49:56',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 155,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-10 09:52:38',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 156,
            'HoaDonId' => 15,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-23 06:28:56',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 157,
            'HoaDonId' => 54,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-10 11:52:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 158,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-20 06:08:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 159,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-12 00:13:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 160,
            'HoaDonId' => 42,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-17 18:13:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 161,
            'HoaDonId' => 23,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-27 05:14:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 162,
            'HoaDonId' => 64,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-02 12:06:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 163,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-21 14:40:44',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 164,
            'HoaDonId' => 7,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-16 05:07:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 165,
            'HoaDonId' => 25,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-03-08 18:35:56',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 166,
            'HoaDonId' => 42,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-26 09:40:02',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 167,
            'HoaDonId' => 77,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-09-20 20:14:45',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 168,
            'HoaDonId' => 32,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-27 11:12:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 169,
            'HoaDonId' => 25,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-29 20:23:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 170,
            'HoaDonId' => 29,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-02-14 17:41:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 171,
            'HoaDonId' => 69,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-03 17:54:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 172,
            'HoaDonId' => 27,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-08 18:30:35',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 173,
            'HoaDonId' => 77,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-26 04:23:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 174,
            'HoaDonId' => 92,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2022-02-14 00:16:50',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 175,
            'HoaDonId' => 42,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-21 10:13:36',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 176,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-26 12:27:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 177,
            'HoaDonId' => 52,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-10 06:27:34',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 178,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-13 08:03:00',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 179,
            'HoaDonId' => 44,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-11-09 01:20:58',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 180,
            'HoaDonId' => 19,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-28 23:11:59',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 181,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-01-28 11:07:25',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 182,
            'HoaDonId' => 52,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-03 22:38:29',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 183,
            'HoaDonId' => 94,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-05 20:02:21',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 184,
            'HoaDonId' => 96,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-05 06:43:47',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 185,
            'HoaDonId' => 66,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-21 10:23:46',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 186,
            'HoaDonId' => 91,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-11 03:51:41',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 187,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-07-03 07:21:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 188,
            'HoaDonId' => 66,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-24 04:11:07',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 189,
            'HoaDonId' => 40,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2022-02-09 04:11:03',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 190,
            'HoaDonId' => 38,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-23 07:00:27',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 191,
            'HoaDonId' => 89,
            'NguoiVanChuyenId' => 7,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-07 05:10:51',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 192,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 6,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-12-11 09:55:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 193,
            'HoaDonId' => 62,
            'NguoiVanChuyenId' => 4,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-01 12:10:10',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 194,
            'HoaDonId' => 77,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-10-31 02:33:40',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 195,
            'HoaDonId' => 65,
            'NguoiVanChuyenId' => 3,
            'MoTa' => '',
            'TrangThai' => 1,
            'created_at' => '2021-12-25 05:03:01',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 196,
            'HoaDonId' => 75,
            'NguoiVanChuyenId' => 1,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-02-04 01:46:05',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 197,
            'HoaDonId' => 61,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-08-15 14:43:06',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 198,
            'HoaDonId' => 16,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-06-28 01:02:55',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 199,
            'HoaDonId' => 88,
            'NguoiVanChuyenId' => 2,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-11-19 08:33:42',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);



        Lichsuvanchuyen::create([
            'id' => 200,
            'HoaDonId' => 15,
            'NguoiVanChuyenId' => 5,
            'MoTa' => '',
            'TrangThai' => 0,
            'created_at' => '2021-04-22 02:10:39',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
        Conversation::create([
            'id' => 1,
            'NhanVienId' => 1,
            'KhachHangId' => 12,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 2,
            'NhanVienId' => 1,
            'KhachHangId' => 18,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 3,
            'NhanVienId' => 1,
            'KhachHangId' => 46,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 4,
            'NhanVienId' => 1,
            'KhachHangId' => 30,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 5,
            'NhanVienId' => 1,
            'KhachHangId' => 54,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 6,
            'NhanVienId' => 1,
            'KhachHangId' => 27,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 7,
            'NhanVienId' => 1,
            'KhachHangId' => 40,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 8,
            'NhanVienId' => 1,
            'KhachHangId' => 52,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 9,
            'NhanVienId' => 1,
            'KhachHangId' => 25,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 10,
            'NhanVienId' => 1,
            'KhachHangId' => 36,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 11,
            'NhanVienId' => 1,
            'KhachHangId' => 41,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 12,
            'NhanVienId' => 1,
            'KhachHangId' => 51,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 13,
            'NhanVienId' => 1,
            'KhachHangId' => 42,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 14,
            'NhanVienId' => 1,
            'KhachHangId' => 45,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 15,
            'NhanVienId' => 1,
            'KhachHangId' => 35,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 16,
            'NhanVienId' => 1,
            'KhachHangId' => 1,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 17,
            'NhanVienId' => 1,
            'KhachHangId' => 2,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 18,
            'NhanVienId' => 1,
            'KhachHangId' => 3,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 19,
            'NhanVienId' => 1,
            'KhachHangId' => 4,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 20,
            'NhanVienId' => 1,
            'KhachHangId' => 5,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 21,
            'NhanVienId' => 1,
            'KhachHangId' => 26,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 22,
            'NhanVienId' => 1,
            'KhachHangId' => 33,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 23,
            'NhanVienId' => 1,
            'KhachHangId' => 43,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 24,
            'NhanVienId' => 1,
            'KhachHangId' => 8,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 25,
            'NhanVienId' => 1,
            'KhachHangId' => 17,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 26,
            'NhanVienId' => 1,
            'KhachHangId' => 11,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 27,
            'NhanVienId' => 1,
            'KhachHangId' => 7,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 28,
            'NhanVienId' => 1,
            'KhachHangId' => 39,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 29,
            'NhanVienId' => 1,
            'KhachHangId' => 37,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 30,
            'NhanVienId' => 1,
            'KhachHangId' => 47,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 31,
            'NhanVienId' => 1,
            'KhachHangId' => 28,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 32,
            'NhanVienId' => 1,
            'KhachHangId' => 20,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 33,
            'NhanVienId' => 1,
            'KhachHangId' => 10,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 34,
            'NhanVienId' => 1,
            'KhachHangId' => 49,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 35,
            'NhanVienId' => 1,
            'KhachHangId' => 19,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 36,
            'NhanVienId' => 1,
            'KhachHangId' => 31,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 37,
            'NhanVienId' => 1,
            'KhachHangId' => 22,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 38,
            'NhanVienId' => 1,
            'KhachHangId' => 44,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 39,
            'NhanVienId' => 1,
            'KhachHangId' => 9,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 40,
            'NhanVienId' => 1,
            'KhachHangId' => 14,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 41,
            'NhanVienId' => 1,
            'KhachHangId' => 15,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 42,
            'NhanVienId' => 1,
            'KhachHangId' => 53,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 43,
            'NhanVienId' => 1,
            'KhachHangId' => 38,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 44,
            'NhanVienId' => 1,
            'KhachHangId' => 21,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 45,
            'NhanVienId' => 1,
            'KhachHangId' => 34,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 46,
            'NhanVienId' => 1,
            'KhachHangId' => 56,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 47,
            'NhanVienId' => 1,
            'KhachHangId' => 23,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 48,
            'NhanVienId' => 1,
            'KhachHangId' => 24,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 49,
            'NhanVienId' => 1,
            'KhachHangId' => 16,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 50,
            'NhanVienId' => 1,
            'KhachHangId' => 55,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 51,
            'NhanVienId' => 1,
            'KhachHangId' => 32,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 52,
            'NhanVienId' => 1,
            'KhachHangId' => 29,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 53,
            'NhanVienId' => 1,
            'KhachHangId' => 13,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 54,
            'NhanVienId' => 1,
            'KhachHangId' => 6,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 55,
            'NhanVienId' => 1,
            'KhachHangId' => 50,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);



        Conversation::create([
            'id' => 56,
            'NhanVienId' => 1,
            'KhachHangId' => 48,
            'created_at' => '2022-02-15 08:06:58',
            'updated_at' => NULL
        ]);
        Message::create([
            'id' => 1,
            'Body' => 'Hello Admin',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2020-12-31 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 2,
            'Body' => 'Mon nay` ban nhu nao`?',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-02 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 3,
            'Body' => 'Gia bao nhieu',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-04 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 4,
            'Body' => '200k ban ko',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-07 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 5,
            'Body' => 'abcxyz thoi ko mua nua',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-08 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 6,
            'Body' => 'Hello khach',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-01 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 7,
            'Body' => 'Mon nay sieu re~',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-03 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 8,
            'Body' => 'mua di mua di',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-05 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 9,
            'Body' => 'ban voi gia sale mua di dung ngai',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-06 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 10,
            'Body' => 'khong mua t chem',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-09 17:00:00',
            'updated_at' => NULL
        ]);
    }
}
