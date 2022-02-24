<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KhachHang;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            'created_at' => '2008-12-20 10:53:32',
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
            'created_at' => '2008-08-15 13:14:32',
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
            'created_at' => '2001-03-15 16:31:47',
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
            'created_at' => '2010-02-25 01:55:06',
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
            'created_at' => '2002-02-23 14:59:53',
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
            'created_at' => '2010-04-15 04:13:55',
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
            'created_at' => '2014-12-27 07:09:41',
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
            'created_at' => '2014-01-29 06:06:25',
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
            'created_at' => '2010-06-06 16:02:47',
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
            'created_at' => '2009-11-30 20:54:27',
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
            'created_at' => '2003-04-16 15:23:41',
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
            'created_at' => '2001-09-13 21:14:51',
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
            'created_at' => '2013-08-23 19:02:59',
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
            'created_at' => '2003-02-11 14:30:06',
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
            'created_at' => '2004-08-21 22:21:19',
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
            'created_at' => '2013-11-10 03:16:02',
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
            'created_at' => '2010-05-17 04:15:58',
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
            'created_at' => '2010-04-17 18:31:31',
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
            'created_at' => '2005-05-06 14:49:27',
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
            'created_at' => '2010-11-07 01:32:28',
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
            'created_at' => '2008-03-18 18:13:46',
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
            'created_at' => '2008-07-06 21:31:09',
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
            'created_at' => '2002-12-07 11:54:16',
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
            'created_at' => '2004-02-16 01:57:40',
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
            'created_at' => '2011-10-31 05:05:15',
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
            'created_at' => '2001-10-10 02:33:00',
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
            'created_at' => '2003-05-20 04:29:02',
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
            'created_at' => '2011-08-02 21:45:56',
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
            'created_at' => '2002-10-14 06:22:19',
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
            'created_at' => '2009-03-02 21:33:33',
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
            'created_at' => '2007-06-27 23:40:35',
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
            'created_at' => '2009-12-07 12:42:02',
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
            'created_at' => '2012-03-16 23:28:09',
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
            'created_at' => '2001-03-27 14:14:24',
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
            'created_at' => '2014-07-24 07:47:20',
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
            'created_at' => '2009-02-03 03:13:16',
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
            'created_at' => '2001-10-12 23:44:06',
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
            'created_at' => '2011-08-20 20:00:27',
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
            'created_at' => '2007-10-30 11:49:41',
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
            'created_at' => '2004-03-28 06:06:52',
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
            'created_at' => '2012-09-16 02:05:02',
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
            'created_at' => '2005-10-29 23:04:18',
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
            'created_at' => '2006-01-06 20:06:13',
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
            'created_at' => '2012-08-07 14:17:54',
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
            'created_at' => '2014-12-14 18:10:38',
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
            'created_at' => '2006-12-18 06:59:14',
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
            'created_at' => '2004-12-15 11:24:03',
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
            'created_at' => '2003-11-23 19:02:18',
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
            'created_at' => '2004-08-09 19:59:07',
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
            'created_at' => '2011-05-09 01:48:26',
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
            'created_at' => '2012-12-07 04:04:34',
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
            'created_at' => '2000-08-12 21:57:19',
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
            'created_at' => '2009-04-12 08:32:40',
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
            'created_at' => '2014-07-20 07:51:10',
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
            'created_at' => '2014-11-28 20:37:36',
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
            'created_at' => '2000-11-24 14:34:14',
            'updated_at' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
