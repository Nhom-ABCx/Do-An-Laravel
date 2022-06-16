INSERT INTO `quyens` (`Code`, `TenQuyen`, `parent_id`) VALUES
('slider', 'slider',null),
('sliderList', 'List slider', 1),
('sliderAdd', 'Add slider', 1),
('sliderEdit', 'Edit slider', 1),
('sliderDelete', 'Delete slider', 1),
('taiKhoan', 'taiKhoan',null),
('taiKhoanList', 'List taiKhoan', 6),
('taiKhoanAdd', 'Add taiKhoan', 6),
('taiKhoanEdit', 'Edit taiKhoan', 6),
('taiKhoanDelete', 'Delete taiKhoan', 6),
('loaiTaiKhoan', 'loaiTaiKhoan',null),
('loaiTaiKhoanList', 'List loaiTaiKhoan', 11),
('loaiTaiKhoanAdd', 'Add loaiTaiKhoan', 11),
('loaiTaiKhoanEdit', 'Edit loaiTaiKhoan', 11),
('loaiTaiKhoanDelete', 'Delete loaiTaiKhoan', 11),
('quyen', 'quyen',null),
('quyenList', 'List quyen', 16),
('quyenAdd', 'Add quyen', 16),
('quyenEdit', 'Edit quyen', 16),
('quyenDelete', 'Delete quyen', 16),
('loaiSanPham', 'loaiSanPham',null),
('loaiSanPhamList', 'List loaiSanPham', 21),
('loaiSanPhamAdd', 'Add loaiSanPham', 21),
('loaiSanPhamEdit', 'Edit loaiSanPham', 21),
('loaiSanPhamDelete', 'Delete loaiSanPham', 21),
('loaiSanPhamRestore', 'Restore loaiSanPham', 21),
('loaiSanPhamForceDelete', 'ForceDelete loaiSanPham', 21),
('sanPham', 'sanPham',null),
('sanPhamList', 'List sanPham', 28),
('sanPhamAdd', 'Add sanPham', 28),
('sanPhamEdit', 'Edit sanPham', 28),
('sanPhamDelete', 'Delete sanPham', 28),
('sanPhamRestore', 'Restore sanPham', 28),
('sanPhamForceDelete', 'ForceDelete sanPham', 28),
('hoaDon', 'hoaDon',null),
('hoaDonList', 'List hoaDon', 35),
('hoaDonEdit', 'Edit hoaDon', 35),
('hoaDonDelete', 'Delete hoaDon', 35),
('hoaDonRestore', 'Restore hoaDon', 35),
('hoaDonForceDelete', 'ForceDelete hoaDon', 35);


insert into loai_tai_khoans(TenLoai,MoTa) values
('Admin','Admin quyền hạn cao nhất'),
('NhanVien','Nhân viên'),
('Khach','loại khách Thường'),
('Vip','Vip pro'),
('Kho','Quản lý kho'),
('HR','Quản lý Nhân sự');

insert loai_tai_khoan_quyens(LoaiTaiKhoanId,QuyenId,Mota)
SELECT 1, a.id,CONCAT_WS('-','Admin',a.TenQuyen) FROM quyens a;


insert into tai_khoans(Username,Email,Phone,MatKhau,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,LoaiTaiKhoanId,created_at) values
('Admin','Admin@gmail.com','0779597983','Admin',N'Administrator','2007/02/14',1,N'TP HCM','/storage/assets/images/avatar/NhanVien/1/image-1.jpg',1,'1991-11-11'),
('NhanVien01','NhanVien01@gmail.com','0238506390','password123',N'Bà Huyện Thanh Quan','1997/04/14',0,N'O7, Cao Bá Nhạ, Hậu Giang','/storage/assets/images/avatar/NhanVien/2/image-2.jpg',2,'1991-11-11'),
('NhanVien02','NhanVien02@gmail.com','0176440449','password123',N'Nguyễn Hữu Cảnh','2002/11/12',0,N'P7, Đồng Khởi, Lào Cai','/storage/assets/images/avatar/NhanVien/3/image-3.jpg',2,'1991-11-11'),
('NhanVien03','NhanVien03@gmail.com','0300345555','password123',N'Alexandre de Rhodes','2020/08/03',0,N'B0, Lê Lai, Thái Bình','/storage/assets/images/avatar/NhanVien/4/image-4.jpg',2,'1991-11-11'),
('Khach01','Khach01@gmail.com','0618431768','password123',N'Hồ Huấn Nghiệp','1990/11/24',0,N'J5, Nguyễn Hữu Cầu, Thanh Hóa','/storage/assets/images/avatar/User/1/image-5.jpg',3,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach02','Khach02@gmail.com','0452803292','password123',N'Hàm Nghi','1996/10/15',0,N'D4, Huỳnh Khương Ninh, Tiền Giang','/storage/assets/images/avatar/User/2/image-6.jpg',3,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach03','Khach03@gmail.com','0566425150','password123',N'Hồ Tùng Mậu','1986/04/09',0,N'P1, Bùi Viện, Hải Phòng','/storage/assets/images/avatar/User/3/thumb-1.jpg',3,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach04','Khach04@gmail.com','0982099712','password123',N'Nguyễn Cư Trinh','1994/08/27',1,N'W7, Mai Thị Lựu, Trà Vinh','/storage/assets/images/avatar/User/4/thumb-2.jpg',3,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach05','Khach05@gmail.com','0333641834','password123',N'Bùi Viện','1990/09/06',1,N'D3, Nam Quốc Cang, Bình Định','/storage/assets/images/avatar/User/5/thumb-3.jpg',3,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowgoose667', 'eva.brunet@example.com', '01-70-39-10-88', 'password123', 'Eva_Brunet', '1969-10-04 21:13:06', 0, 'Rue Barrier, Rouen, France', 'https://randomuser.me/api/portraits/women/76.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplebird327', 'tristan.moller@example.com', '16961009', 'password123', 'Tristan_Møller', '1964-08-09 17:32:23', 1, 'Græsvangen, Sønder Stenderup, Denmark', 'https://randomuser.me/api/portraits/men/99.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('orangedog977', 'anselm.abel@example.com', '0497-4150057', 'password123', 'Anselm_Abel', '1964-10-06 19:23:45', 1, 'Ahornweg, Markkleeberg, Germany', 'https://randomuser.me/api/portraits/men/46.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silvermeercat905', 'isabelle.baker@example.com', '021-635-8296', 'password123', 'Isabelle_Baker', '1972-04-29 17:31:08', 0, 'New Street, Dungarvan, Ireland', 'https://randomuser.me/api/portraits/women/2.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redmouse558', 'selma.rasmussen@example.com', '99854271', 'password123', 'Selma_Rasmussen', '1945-04-14 07:25:06', 0, 'Skovstjernevej, Viby Sj., Denmark', 'https://randomuser.me/api/portraits/women/54.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('organiccat269', 'xavier.smith@example.com', '(170)-823-5752', 'password123', 'Xavier_Smith', '1983-01-19 03:19:46', 1, 'Mt Eden Road, Tauranga, New Zealand', 'https://randomuser.me/api/portraits/men/71.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('beautifultiger243', 'dilano.degroen@example.com', '(489)-330-0847', 'password123', 'Dilano_De Groen', '1947-05-19 20:26:13', 1, 'Duykerdam, Ens, Netherlands', 'https://randomuser.me/api/portraits/men/53.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowdog132', 'jaime.cano@example.com', '947-024-220', 'password123', 'Jaime_Cano', '1945-10-08 15:01:10', 1, 'Paseo de Extremadura, Santa Cruz de Tenerife, Spain', 'https://randomuser.me/api/portraits/men/3.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silverpanda724', 'selami.vanleeuwe@example.com', '(607)-530-6761', 'password123', 'Selami_Van Leeuwe', '1964-09-09 07:09:13', 1, 'Koppertjesland, Sint Jansteen, Netherlands', 'https://randomuser.me/api/portraits/men/64.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silversnake914', 'arianna.mendoza@example.com', '01-5137-4415', 'password123', 'Arianna_Mendoza', '1989-03-06 19:44:01', 0, 'Homestead Rd, Busselton, Australia', 'https://randomuser.me/api/portraits/women/66.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whiteladybug785', 'halil.denis@example.com', '076 624 70 22', 'password123', 'Monsieur.Halil_Denis', '1978-08-22 07:29:16', 1, 'Rue de L\Abbé-Roger-Derry, Thusis, Switzerland', 'https://randomuser.me/api/portraits/men/59.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('orangezebra649', 'winfried.bock@example.com', '0455-7981435', 'password123', 'Winfried_Böck', '1979-04-11 00:49:24', 1, 'Birkenweg, Pausa-Mühltroff, Germany', 'https://randomuser.me/api/portraits/men/53.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('biggorilla358', 'grace.stanley@example.com', '015396 56883', 'password123', 'Grace_Stanley', '1962-03-24 15:15:53', 0, 'Manor Road, Portsmouth, United Kingdom', 'https://randomuser.me/api/portraits/women/22.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redwolf926', 'ravn.bore@example.com', '70326619', 'password123', 'Ravn_Bore', '1959-11-23 19:32:54', 1, 'Valmueveien, Valestrandfossen, Norway', 'https://randomuser.me/api/portraits/men/98.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplerabbit548', 'gina.evans@example.com', '(042)-015-6700', 'password123', 'Gina_Evans', '1975-01-17 18:11:50', 0, 'Mcgowen St, Saint Paul, United States', 'https://randomuser.me/api/portraits/women/41.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('ticklishfrog305', 'yvete.martins@example.com', '(81) 3896-1502', 'password123', 'Yvete_Martins', '1960-02-19 18:23:42', 0, 'Travessa dos Martírios, Rio Branco, Brazil', 'https://randomuser.me/api/portraits/women/35.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('sadswan412', 'lucas.johnston@example.com', '01-9246-8431', 'password123', 'Lucas_Johnston', '1951-01-15 12:27:21', 1, 'Robinson Rd, Warragul, Australia', 'https://randomuser.me/api/portraits/men/63.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinymeercat482', 'jose.ortega@example.com', '962-099-714', 'password123', 'Jose_Ortega', '1995-06-03 22:02:34', 0, 'Calle de Alcalá, Mérida, Spain', 'https://randomuser.me/api/portraits/women/26.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinyswan309', 'noah.fabre@example.com', '077 454 37 76', 'password123', 'Monsieur.Noah_Fabre', '1996-05-14 06:40:34', 1, 'Place du 8 Novembre 1942, Saanen, Switzerland', 'https://randomuser.me/api/portraits/men/26.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('crazyleopard372', 'kayla.powell@example.com', '011-887-3410', 'password123', 'Kayla_Powell', '1975-01-10 13:25:11', 0, 'Rookery Road, Balbriggan, Ireland', 'https://randomuser.me/api/portraits/women/89.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazyladybug318', 'necati.yildirim@example.com', '(044)-771-1565', 'password123', 'Necati_Yıldırım', '1971-05-05 09:53:45', 1, 'Kushimoto Sk, Çorum, Turkey', 'https://randomuser.me/api/portraits/men/52.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('bluetiger184', 'murat.basoglu@example.com', '(417)-493-7694', 'password123', 'Murat_Başoğlu', '1966-07-28 06:25:59', 1, 'Mevlana Cd, Erzurum, Turkey', 'https://randomuser.me/api/portraits/men/20.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplefish964', 'myraaly.prs@example.com', '058-72469339', 'password123', 'اميرعلي_پارسا', '1981-01-24 11:50:09', 1, 'آفریقا, خوی, Iran', 'https://randomuser.me/api/portraits/men/83.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowbird754', 'lise.giraud@example.com', '01-34-48-10-18', 'password123', 'Lise_Giraud', '1988-08-14 05:19:16', 0, 'Rue Paul Bert, Aulnay-sous-Bois, France', 'https://randomuser.me/api/portraits/women/41.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blackelephant735', 'aarshy.qsmy@example.com', '038-68498535', 'password123', 'عرشيا_قاسمی', '1967-06-16 19:53:12', 1, 'استاد قریب, ساوه, Iran', 'https://randomuser.me/api/portraits/men/22.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('sadladybug654', 'emma.ross@example.com', '193-837-2560', 'password123', 'Emma_Ross', '1947-03-07 12:57:24', 0, 'Dundas Rd, Russell, Canada', 'https://randomuser.me/api/portraits/women/1.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whitemouse706', 'antonia.gallego@example.com', '997-476-306', 'password123', 'Antonia_Gallego', '1973-08-15 11:11:37', 0, 'Calle del Pez, Almería, Spain', 'https://randomuser.me/api/portraits/women/26.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazypanda842', 'shyn.slry@example.com', '046-43829717', 'password123', 'شایان_سالاری', '1953-10-10 17:41:53', 1, 'آیت الله طالقانی, سنندج, Iran', 'https://randomuser.me/api/portraits/men/56.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinybird421', 'zachary.willis@example.com', '041-970-5705', 'password123', 'Zachary_Willis', '1995-08-22 13:42:32', 1, 'Albert Road, Tralee, Ireland', 'https://randomuser.me/api/portraits/men/58.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('heavywolf136', 'erica.morgan@example.com', '(507)-002-2277', 'password123', 'Erica_Morgan', '1974-03-24 12:16:08', 0, 'Samaritan Dr, Aubrey, United States', 'https://randomuser.me/api/portraits/women/46.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('crazypanda754', 'jaylen.vanderzwaan@example.com', '(534)-286-1389', 'password123', 'Jaylen_Van der Zwaan', '1952-04-24 18:11:57', 1, 'Clioplein, Overloon, Netherlands', 'https://randomuser.me/api/portraits/men/78.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplecat202', 'adele.joly@example.com', '02-43-99-12-72', 'password123', 'Adèle_Joly', '1989-08-09 22:27:43', 0, 'Rue Abel-Hovelacque, Nancy, France', 'https://randomuser.me/api/portraits/women/27.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('smallzebra313', 'ruben.clarke@example.com', '017684 44529', 'password123', 'Ruben_Clarke', '1980-09-05 19:13:46', 1, 'Mill Lane, St Davids, United Kingdom', 'https://randomuser.me/api/portraits/men/1.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplebird934', 'lilou.perrin@example.com', '05-83-43-99-24', 'password123', 'Lilou_Perrin', '1987-11-21 23:05:26', 0, 'Boulevard de la Duchère, Saint-Pierre, France', 'https://randomuser.me/api/portraits/women/89.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('brownfish292', 'khymy.kmyrn@example.com', '092-03645982', 'password123', 'کیمیا_كامياران', '1970-07-22 04:12:24', 0, 'میدان امام خمینی, تبریز, Iran', 'https://randomuser.me/api/portraits/women/24.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('goldensnake516', 'tale.smestad@example.com', '57356215', 'password123', 'Tale_Smestad', '1947-09-13 20:39:01', 0, 'Langbølgen, Sørland, Norway', 'https://randomuser.me/api/portraits/women/38.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('happybird837', 'alexis.chan@example.com', '757-179-0206', 'password123', 'Alexis_Chan', '1957-12-11 03:24:31', 0, 'Pine Rd, Stirling, Canada', 'https://randomuser.me/api/portraits/women/13.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazysnake652', 'malou.nielsen@example.com', '96787914', 'password123', 'Malou_Nielsen', '1949-10-23 09:12:07', 0, 'Buen, Assens, Denmark', 'https://randomuser.me/api/portraits/women/25.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silvercat129', 'gul.gunday@example.com', '(420)-339-4996', 'password123', 'Gül_Günday', '1965-11-23 11:09:42', 0, 'Fatih Sultan Mehmet Cd, Kayseri, Turkey', 'https://randomuser.me/api/portraits/women/22.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('happyrabbit168', 'awyn.khrymy@example.com', '090-89999548', 'password123', 'آوین_کریمی', '1980-05-27 14:27:24', 0, 'آیت الله مدرس, زاهدان, Iran', 'https://randomuser.me/api/portraits/women/3.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blackduck772', 'dora.sullivan@example.com', '(954)-636-3855', 'password123', 'Dora_Sullivan', '1961-05-25 02:42:55', 0, 'Wycliff Ave, Stockton, United States', 'https://randomuser.me/api/portraits/women/90.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplefish885', 'stephanie.ross@example.com', '051-945-8379', 'password123', 'Stephanie_Ross', '1992-02-25 05:51:39', 0, 'The Drive, Roscommon, Ireland', 'https://randomuser.me/api/portraits/women/70.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowpeacock450', 'serenity.mccoy@example.com', '01-2775-8588', 'password123', 'Serenity_Mccoy', '1956-10-18 13:23:55', 0, 'E North St, Bendigo, Australia', 'https://randomuser.me/api/portraits/women/65.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redwolf324', 'luz.arias@example.com', '938-354-983', 'password123', 'Luz_Arias', '1989-08-05 18:43:59', 0, 'Paseo de Zorrilla, Alcobendas, Spain', 'https://randomuser.me/api/portraits/women/53.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowpanda307', 'storm.larsen@example.com', '85506086', 'password123', 'Storm_Larsen', '1990-02-15 03:39:18', 1, 'Søvænget, Jerslev Sj, Denmark', 'https://randomuser.me/api/portraits/men/51.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('goldensnake827', 'lila.pierre@example.com', '04-00-84-09-54', 'password123', 'Lila_Pierre', '1974-12-29 17:03:49', 0, 'Rue Dugas-Montbel, Orléans, France', 'https://randomuser.me/api/portraits/women/11.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('brownostrich388', 'wayne.rhodes@example.com', '015396 72883', 'password123', 'Wayne_Rhodes', '1970-12-25 11:36:04', 1, 'Station Road, Leicester, United Kingdom', 'https://randomuser.me/api/portraits/men/73.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('smallbird737', 'naomi.westerhof@example.com', '(485)-591-8578', 'password123', 'Naömi_Westerhof', '1958-12-06 15:09:13', 0, 'De Borstelmaker, Vreeswijk, Netherlands', 'https://randomuser.me/api/portraits/women/90.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blueleopard929', 'ulf.nagel@example.com', '0492-1373598', 'password123', 'Ulf_Nagel', '1944-12-30 13:09:35', 1, 'Grüner Weg, Barmstedt, Germany', 'https://randomuser.me/api/portraits/men/93.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whitemeercat301', 'tilde.rasmussen@example.com', '90306008', 'password123', 'Tilde_Rasmussen', '1954-11-25 03:00:34', 0, 'Egevangen, København Ø, Denmark', 'https://randomuser.me/api/portraits/women/1.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinyelephant830', 'rebekka.schie@example.com', '65371361', 'password123', 'Rebekka_Schie', '1966-09-24 20:57:08', 0, 'Lachmanns vei, Skarnes, Norway', 'https://randomuser.me/api/portraits/women/9.jpg',(SELECT FLOOR((RAND() * (6-3+1))+3)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01'))));

insert into Hang_San_Xuats(TenHangSanXuat) values
('Cannon' ),
('IPhone' ),
('Xiaomi' ),
('SaNaKy' ),
('SONY'   ),
('SamSung'),
('ViVo'   ),
('LG'     ),
('Toshiba'),
('Acer'   ),
('ASUS'   ),
('Oppo'   ),
('Realme' );

insert into Loai_San_Phams(Code,TenLoai,MoTa,Icon) values
('DT',N'Điện thoại','Smart Phone','{"iconHtml":"<i class=\'material-icons md-36\'>phone_iphone</i>","iconName":"phone_iphone","iconCode":"0xe4aa"}'),
('DL',N'Điện lạnh',null,'{"iconHtml":"<i class=\'material-icons md-36\'>mode_fan_off</i>","iconName":"mode_fan_off","iconCode":"0xf07ae"}'),
('LT',N'LapTop',null,'{"iconHtml":"<i class=\'material-icons md-36\'>laptop_windows</i>","iconName":"laptop_windows","iconCode":"0xe36a"}'),
('MA',N'Máy ảnh',null,'{"iconHtml":"<i class=\'material-icons md-36\'>photo_camera</i>","iconName":"photo_camera","iconCode":"0xe4b6"}'),
('MTB',N'Máy tính bảng',null,'{"iconHtml":"<i class=\'material-icons md-36\'>developer_board</i>","iconName":"developer_board","iconCode":"0xe1c5"}'),
('PK',N'Phụ kiện',null,'{"iconHtml":"<i class=\'material-icons md-36\'>device_hub</i>","iconName":"device_hub","iconCode":"0xe1c8"}');
INSERT INTO loai_san_phams (Code, TenLoai, MoTa, _lft, _rgt, parent_id) VALUES
('CHG', 'Clothing', '', 13, 34, NULL),
('CHG-MEN', 'Men', '', 14, 21, 7),
('CHG-MEN-SIS', 'Suits', '', 15, 20, 8),
('CHG-MEN-SIS-JKS', 'Jackets', '', 16, 17, 9),
('CHG-MEN-SIS-SCS', 'Slacks', '', 18, 19, 9),
('CHG-WMN', 'Women', '', 22, 33, 7),
('CHG-WMN-SIT', 'Skirt', '', 23, 30, 12),
('CHG-WMN-SIT-DSS', 'Dresses', '', 24, 29, 13),
('CHG-WMN-SIT-DSS-SD', 'Sun Dresses', '', 25, 26, 14),
('CHG-WMN-SIT-DSS-EG', 'Everning Grows', '', 27, 28, 14),
('CHG-WMN-BUS', 'Blouses', '', 31, 32, 12);


INSERT INTO `san_phams` (`HangSanXuatId`, `LoaiSanPhamId`, `TenSanPham`, `ThuocTinh`, `MoTa`, `LuotMua`, `ThuocTinhToHop`, `TrangThai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, 'Điện thoại Samsung Galaxy S22 Ultra 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"Dynamic AMOLED 2X, 6.8\\\", Quad HD+ (2K+)\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 12\",\"Camera sau:\":\"Ch\\u00ednh 108 MP & Ph\\u1ee5 12 MP, 10 MP, 10 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"40 MP\",\"Chip:\":\"Snapdragon 8 Gen 1 8 nh\\u00e2n\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM ho\\u1eb7c 1 Nano SIM + 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 45 W\"}', 'Mô tả ko crawl dc', 0, '["Ram/Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:06', '2022-05-20 00:28:06', NULL),
(2, 1, 'Điện thoại iPhone 11', '{\"M\\u00e0n h\\u00ecnh:\":\"IPS LCD, 6.1\\\", Liquid Retina\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"iOS 15\",\"Camera sau:\":\"2 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"12 MP\",\"Chip:\":\"Apple A13 Bionic\",\"RAM:\":\"4 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"64 GB\",\"SIM:\":\"1 Nano SIM & 1 eSIM, H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"3110 mAh, 18 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:07', '2022-05-20 00:28:07', NULL),
(12, 1, 'Điện thoại OPPO Reno7 Z 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"AMOLED, 6.43\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 64 MP & Ph\\u1ee5 2 MP, 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"16 MP\",\"Chip:\":\"Snapdragon 695 5G 8 nh\\u00e2n\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM (SIM 2 chung khe th\\u1ebb nh\\u1edb), H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"4500 mAh, 33 W\"}', 'Mô tả ko crawl dc', 0, '["Loại", "Màu sắc"]', 1, '2022-05-20 00:28:10', '2022-05-20 00:28:10', NULL),
(13, 1, 'Điện thoại Realme C35', '{\"M\\u00e0n h\\u00ecnh:\":\"IPS LCD, 6.6\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 50 MP & Ph\\u1ee5 2 MP, 0.3 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"8 MP\",\"Chip:\":\"Unisoc T616 8 nh\\u00e2n\",\"RAM:\":\"4 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"64 GB\",\"SIM:\":\"2 Nano SIM, H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 18 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:11', '2022-05-20 00:28:11', NULL),
(3, 1, 'Điện thoại Xiaomi 11T 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"AMOLED, 6.67\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 108 MP & Ph\\u1ee5 8 MP, 5 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"16 MP\",\"Chip:\":\"MediaTek Dimensity 1200\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 67 W\",\"H\\u00e3ng\":\"Xiaomi. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:11', '2022-05-20 00:28:11', NULL),
(6, 1, 'Điện thoại Samsung Galaxy A03', '{\"M\\u00e0n h\\u00ecnh:\":\"PLS LCD, 6.5\\\", HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 48 MP & Ph\\u1ee5 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"5 MP\",\"Chip:\":\"Unisoc T606 8 nh\\u00e2n\",\"RAM:\":\"3 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"32 GB\",\"SIM:\":\"2 Nano SIM, H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 7.75 W\"}', 'Mô tả ko crawl dc', 0, '["Ram", "Màu sắc"]', 1, '2022-05-20 00:28:12', '2022-05-20 00:28:12', NULL),
(3, 1, 'Điện thoại Xiaomi Redmi Note 11 Pro', '{\"M\\u00e0n h\\u00ecnh:\":\"AMOLED, 6.67\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 108 MP & Ph\\u1ee5 8 MP, 2 MP, 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"16 MP\",\"Chip:\":\"MediaTek Helio G96 8 nh\\u00e2n\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM (SIM 2 chung khe th\\u1ebb nh\\u1edb), H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 67 W\",\"H\\u00e3ng\":\"Xiaomi. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Loại", "Màu sắc"]', 1, '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(3, 1, 'Điện thoại Xiaomi Redmi Note 11S 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"IPS LCD, 6.6\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 50 MP & Ph\\u1ee5 8 MP, 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"13 MP\",\"Chip:\":\"MediaTek Dimensity 810 5G 8 nh\\u00e2n\",\"RAM:\":\"6 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM (SIM 2 chung khe th\\u1ebb nh\\u1edb), H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 33 W\",\"H\\u00e3ng\":\"Xiaomi. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Loại", "Màu sắc"]', 1, '2022-05-20 00:28:14', '2022-05-20 00:28:14', NULL),
(2, 1, 'Điện thoại iPhone 13 Pro Max', '{\"M\\u00e0n h\\u00ecnh:\":\"OLED, 6.7\\\", Super Retina XDR\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"iOS 15\",\"Camera sau:\":\"3 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"12 MP\",\"Chip:\":\"Apple A15 Bionic\",\"RAM:\":\"6 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"1 Nano SIM & 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"4352 mAh, 20 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:15', '2022-05-20 00:28:15', NULL),
(6, 1, 'Điện thoại Samsung Galaxy A52s 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"Super AMOLED, 6.5\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 64 MP & Ph\\u1ee5 12 MP, 5 MP, 5 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"32 MP\",\"Chip:\":\"Snapdragon 778G 5G 8 nh\\u00e2n\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM (SIM 2 chung khe th\\u1ebb nh\\u1edb), H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"4500 mAh, 25 W\"}', 'Mô tả ko crawl dc', 0, '["Màu sắc"]', 1, '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(7, 1, 'Điện thoại Vivo Y15s', '{\"M\\u00e0n h\\u00ecnh:\":\"IPS LCD, 6.51\\\", HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11 (Go Edition)\",\"Camera sau:\":\"Ch\\u00ednh 13 MP & Ph\\u1ee5 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"8 MP\",\"Chip:\":\"MediaTek Helio P35\",\"RAM:\":\"3 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"32 GB\",\"SIM:\":\"2 Nano SIM, H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 10 W\",\"H\\u00e3ng\":\"Vivo. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Loại", "Màu sắc"]', 1, '2022-05-20 00:28:17', '2022-05-20 00:28:17', NULL),
(12, 1, 'Điện thoại OPPO A55', '{\"M\\u00e0n h\\u00ecnh:\":\"IPS LCD, 6.5\\\", HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"Ch\\u00ednh 50 MP & Ph\\u1ee5 2 MP, 2 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"16 MP\",\"Chip:\":\"MediaTek Helio G35\",\"RAM:\":\"4 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"64 GB\",\"SIM:\":\"2 Nano SIM, H\\u1ed7 tr\\u1ee3 4G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 18 W\"}', 'Mô tả ko crawl dc', 0, '["Màu sắc"]', 1, '2022-05-20 00:28:17', '2022-05-20 00:28:17', NULL),
(6, 1, 'Điện thoại Samsung Galaxy Z Fold3 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"Dynamic AMOLED 2X, Ch\\u00ednh 7.6\\\" & Ph\\u1ee5 6.2\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 11\",\"Camera sau:\":\"3 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"10 MP & 4 MP\",\"Chip:\":\"Snapdragon 888\",\"RAM:\":\"12 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"256 GB\",\"SIM:\":\"2 Nano SIM + 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"4400 mAh, 25 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(12, 1, 'Điện thoại OPPO Find X5 Pro 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"AMOLED, 6.7\\\", Quad HD+ (2K+)\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 12\",\"Camera sau:\":\"Ch\\u00ednh 50 MP & Ph\\u1ee5 50 MP, 13 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"32 MP\",\"Chip:\":\"Snapdragon 8 Gen 1 8 nh\\u00e2n\",\"RAM:\":\"12 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"256 GB\",\"SIM:\":\"2 Nano SIM ho\\u1eb7c 1 Nano SIM + 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"5000 mAh, 80 W\"}', 'Mô tả ko crawl dc', 0, '["Màu sắc"]', 1, '2022-05-20 00:28:19', '2022-05-20 00:28:19', NULL),
(2, 1, 'Điện thoại iPhone 12 Pro Max', '{\"M\\u00e0n h\\u00ecnh:\":\"OLED, 6.7\\\", Super Retina XDR\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"iOS 15\",\"Camera sau:\":\"3 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"12 MP\",\"Chip:\":\"Apple A14 Bionic\",\"RAM:\":\"6 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"512 GB\",\"SIM:\":\"1 Nano SIM & 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"3687 mAh, 20 W\"}', 'Mô tả ko crawl dc', 0, '["Màu sắc"]', 1, '2022-05-20 00:28:19', '2022-05-20 00:28:19', NULL),
(2, 1, 'Điện thoại iPhone 13 Pro', '{\"M\\u00e0n h\\u00ecnh:\":\"OLED, 6.1\\\", Super Retina XDR\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"iOS 15\",\"Camera sau:\":\"3 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"12 MP\",\"Chip:\":\"Apple A15 Bionic\",\"RAM:\":\"6 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"1 Nano SIM & 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"3095 mAh, 20 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(2, 1, 'Điện thoại iPhone 12 Pro', '{\"M\\u00e0n h\\u00ecnh:\":\"OLED, 6.1\\\", Super Retina XDR\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"iOS 15\",\"Camera sau:\":\"3 camera 12 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"12 MP\",\"Chip:\":\"Apple A14 Bionic\",\"RAM:\":\"6 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"256 GB\",\"SIM:\":\"1 Nano SIM & 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"2815 mAh, 20 W\"}', 'Mô tả ko crawl dc', 0, '["Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:22', '2022-05-20 00:28:22', NULL),
(6, 1, 'Điện thoại Samsung Galaxy S22+ 5G', '{\"M\\u00e0n h\\u00ecnh:\":\"Dynamic AMOLED 2X, 6.6\\\", Full HD+\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Android 12\",\"Camera sau:\":\"Ch\\u00ednh 50 MP & Ph\\u1ee5 12 MP, 10 MP\",\"Camera tr\\u01b0\\u1edbc:\":\"10 MP\",\"Chip:\":\"Snapdragon 8 Gen 1 8 nh\\u00e2n\",\"RAM:\":\"8 GB\",\"B\\u1ed9 nh\\u1edb trong:\":\"128 GB\",\"SIM:\":\"2 Nano SIM ho\\u1eb7c 1 Nano SIM + 1 eSIM, H\\u1ed7 tr\\u1ee3 5G\",\"Pin, S\\u1ea1c:\":\"4500 mAh, 45 W\"}', 'Mô tả ko crawl dc', 0, '["Ram/Bộ nhớ trong", "Màu sắc"]', 1, '2022-05-20 00:28:23', '2022-05-20 00:28:23', NULL),


(5, 2, 'Tủ đông Kangaroo 327 lít KG498KX2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.45 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft), Nano silver kh\\u00e1ng khu\\u1ea9n\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, B\\u1ea3ng \\u0111i\\u1ec1u khi\\u1ec3n, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"39 - 42 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 127 cm - R\\u1ed9ng 68.8 cm - Cao 80 cm - N\\u1eb7ng 48 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Kangaroo. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:30', '2022-05-26 01:09:30', NULL),
(5, 2, 'Tủ đông Sanaky 260 lít VH-3699W1', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"~1.22 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 121.5 cm - R\\u1ed9ng 62.0 cm - Cao 84.5 cm - N\\u1eb7ng 47.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:31', '2022-05-26 01:09:31', NULL),
(10, 2, 'Tủ đông Sanaky 305 lít VH-4099A1', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"1.39 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 132.9 cm - R\\u1ed9ng 62.0 cm - Cao 84.5 cm - N\\u1eb7ng 51.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:32', '2022-05-26 01:09:32', NULL),
(10, 2, 'Tủ đông Sanaky Inverter 280 lít VH-4099W3', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"1.14 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe (c\\u00f3 kho\\u00e1), Inverter ti\\u1ebft ki\\u1ec7m \\u0111i\\u1ec7n\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 132.8 cm - R\\u1ed9ng 62.0 cm - Cao 84.5 cm - N\\u1eb7ng 49.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:33', '2022-05-26 01:09:33', NULL),
(8, 2, 'Tủ đông Hòa Phát 271 lít HCFI 656S2Đ2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"~1.22 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\\u2264 40 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 123.5 cm - R\\u1ed9ng 68 cm - Cao 86.2 cm - N\\u1eb7ng 56 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Ho\\u00e0 Ph\\u00e1t. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:34', '2022-05-26 01:09:34', NULL),
(8, 2, 'Tủ đông Hòa Phát 245 lít HCF 606S2Đ2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.928 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\\u2264 40 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 123.5 cm - R\\u1ed9ng 61 cm - Cao 92.5 cm - N\\u1eb7ng 53 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Ho\\u00e0 Ph\\u00e1t. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:34', '2022-05-26 01:09:34', NULL),
(1, 2, 'Tủ đông Sanaky 100 lít VH-1599HYK', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng mini\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"0.72 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32 - 42 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 62.0 cm - R\\u1ed9ng 59.0 cm - Cao 80.0 cm - N\\u1eb7ng 32.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:35', '2022-05-26 01:09:35', NULL),
(2, 2, 'Tủ đông Hòa Phát 107 lít HCF 106S1Đ', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.112 KWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\\u2264 40 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 56.4 cm - R\\u1ed9ng 59 cm - Cao 81.5 cm - N\\u1eb7ng 30 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Ho\\u00e0 Ph\\u00e1t. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:39', '2022-05-26 01:09:39', NULL),
(1, 2, 'Tủ đông SANAKY 208 Lít TD.VH255HY2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"0.72 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"Nh\\u00f4m\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp\",\"Ti\\u1ec7n \\u00edch:\":\"Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32 - 42dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 99 cm - R\\u1ed9ng 64.5 cm - Cao 85 cm - N\\u1eb7ng 42 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:40', '2022-05-26 01:09:40', NULL),
(7, 2, 'Tủ đông Kangaroo 252 lít KG 400NC2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.16 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft), Nano silver kh\\u00e1ng khu\\u1ea9n\",\"Ti\\u1ec7n \\u00edch:\":\"Kh\\u00e1ng khu\\u1ea9n, kh\\u1eed m\\u00f9i\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32 - 42 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 115.5 cm - R\\u1ed9ng 62.0 cm - Cao 80 cm - N\\u1eb7ng 48.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Kangaroo. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:41', '2022-05-26 01:09:41', NULL),
(8, 2, 'Tủ đông Hòa Phát 271 lít HCF 656S2Đ2', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.928 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\\u2264 40 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 123.5 cm - R\\u1ed9ng 66 cm - Cao 92.3 cm - N\\u1eb7ng 56 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Ho\\u00e0 Ph\\u00e1t. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:42', '2022-05-26 01:09:42', NULL),
(8, 2, 'Tủ đông LG Inverter 165 lít GN-F304WB', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng \\u0111\\u1ee9ng\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"399 kWh\\/n\\u0103m\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"Nh\\u00f4m\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"C\\u00f4ng ngh\\u1ec7 l\\u00e0m m\\u00e1t c\\u00e1c ng\\u0103n k\\u1ec7 t\\u1ee7, gi\\u00fap t\\u1ee7 m\\u00e1t nhanh h\\u01a1n, Inverter ti\\u1ebft ki\\u1ec7m \\u0111i\\u1ec7n, N\\u00fat \\u0111i\\u1ec1u khi\\u1ec3n nhi\\u1ec7t \\u0111\\u1ed9 b\\u00ean ngo\\u00e0i t\\u1ee7, T\\u1ee7 c\\u00f3 s\\u1ee9c ch\\u1ee9a 6 k\\u1ec7 v\\u00e0 1 h\\u1ed9c t\\u1ee7 gi\\u00fap ti\\u1ec7n l\\u1ee3i b\\u1ea3o qu\\u1ea3n th\\u1ef1c ph\\u1ea9m\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 53.0 cm - R\\u1ed9ng 60.0 cm - Cao 130.0 cm - N\\u1eb7ng 34.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Indonesia\",\"H\\u00e3ng\":\"LG. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:43', '2022-05-26 01:09:43', NULL),
(7, 2, 'Tủ đông Sanaky 220 lít VH-2899W1', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"0.73 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Kho\\u00e1 c\\u1eeda t\\u1ee7\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 108.0 cm - R\\u1ed9ng 62.0 cm - Cao 84.5 cm - N\\u1eb7ng 42.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:43', '2022-05-26 01:09:43', NULL),
(1, 2, 'Tủ đông Sanaky Inverter 761 lít VH-8699HY3', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"4.32 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Inverter ti\\u1ebft ki\\u1ec7m \\u0111i\\u1ec7n, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc, N\\u00fat \\u0111i\\u1ec1u khi\\u1ec3n nhi\\u1ec7t \\u0111\\u1ed9 b\\u00ean ngo\\u00e0i t\\u1ee7\",\"\\u0110\\u1ed9 \\u1ed3n\":\"\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 208.4 cm - R\\u1ed9ng 88.7 cm - Cao 93.5 cm - N\\u1eb7ng 86.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:44', '2022-05-26 01:09:44', NULL),
(11, 2, 'Tủ đông Sanaky 485 lít VH-6699W1', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"1.4 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"B\\u00e1nh xe, Gi\\u1ecf \\u0111\\u1ef1ng \\u0111\\u1ed3, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32 - 42 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 168.5 cm - R\\u1ed9ng 77.5 cm - Cao 84.5 cm - N\\u1eb7ng 70.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:46', '2022-05-26 01:09:46', NULL),
(7, 2, 'Tủ Mát Sanaky 240 lít TM.VH308KL', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 m\\u00e1t\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.15 KWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"Nh\\u00f4m\",\"Ti\\u1ec7n \\u00edch:\":\"Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32-42dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 57.5 cm - R\\u1ed9ng 61 cm - Cao 173.3 cm - N\\u1eb7ng 61 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:47', '2022-05-26 01:09:47', NULL),
(7, 2, 'Tủ đông Sanaky 530 lít VH-6699HY3', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng n\\u1eb1m\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"3.84 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft)\",\"Ti\\u1ec7n \\u00edch:\":\"Inverter ti\\u1ebft ki\\u1ec7m \\u0111i\\u1ec7n\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32 - 42 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 169.0 cm - R\\u1ed9ng 77.5 cm - Cao 85.0 cm - N\\u1eb7ng 76.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:48', '2022-05-26 01:09:48', NULL),
(3, 2, 'Tủ Mát Sanaky Inverter 290 lít TM.VH358K3L', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 m\\u00e1t\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"1.27 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"Nh\\u00f4m\",\"Ti\\u1ec7n \\u00edch:\":\"C\\u00f3 \\u0110\\u00e8n LED, Inverter ti\\u1ebft ki\\u1ec7m \\u0111i\\u1ec7n, Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32-42dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 62.2 cm - R\\u1ed9ng 61 cm - Cao 182 cm - N\\u1eb7ng 64 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:49', '2022-05-26 01:09:49', NULL),
(6, 2, 'Tủ Mát Sanaky 340 lít TM.VH408WL', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 m\\u00e1t\",\"Ki\\u1ec3u d\\u00e1ng:\":\"2 c\\u1eeda, 2 ng\\u0103n m\\u00e1t\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"2.25 KWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"Nh\\u00f4m\",\"Ti\\u1ec7n \\u00edch:\":\"Kho\\u00e1 c\\u1eeda t\\u1ee7, L\\u1ed7 tho\\u00e1t n\\u01b0\\u1edbc\",\"\\u0110\\u1ed9 \\u1ed3n\":\"32-42dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 62.6 cm - R\\u1ed9ng 60.8 cm - Cao 200.7 cm - N\\u1eb7ng 72 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Sanaky. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:50', '2022-05-26 01:09:50', NULL),
(9, 2, 'Tủ đông Kangaroo 140 lít KG 265NC1', '{\"Lo\\u1ea1i t\\u1ee7:\":\"T\\u1ee7 \\u0111\\u00f4ng mini\",\"Ki\\u1ec3u d\\u00e1ng:\":\"1 c\\u1eeda, 1 ng\\u0103n \\u0111\\u00f4ng\",\"\\u0110i\\u1ec7n ti\\u00eau th\\u1ee5:\":\"1.92 kWh\\/ng\\u00e0y\",\"Ch\\u1ea5t li\\u1ec7u d\\u00e0n l\\u1ea1nh\":\"\\u0110\\u1ed3ng\",\"C\\u00f4ng ngh\\u1ec7 t\\u00edch h\\u1ee3p:\":\"L\\u00e0m l\\u1ea1nh tr\\u1ef1c ti\\u1ebfp (c\\u00f3 \\u0111\\u00f3ng tuy\\u1ebft), Nano silver kh\\u00e1ng khu\\u1ea9n\",\"\\u0110\\u1ed9 \\u1ed3n\":\"~40 dB\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng\":\"D\\u00e0i 82.0 cm - R\\u1ed9ng 56.5 cm - Cao 80.0 cm - N\\u1eb7ng 41.0 kg\",\"N\\u01a1i s\\u1ea3n xu\\u1ea5t:\":\"Vi\\u1ec7t Nam\",\"H\\u00e3ng\":\"Kangaroo. Xem th\\u00f4ng tin h\\u00e3ng, Xem th\\u00f4ng tin h\\u00e3ng\"}', 'Mô tả ko crawl dc', 0, '["Lít"]', 1, '2022-05-26 01:09:51', '2022-05-26 01:09:51', NULL),


(8, 3, 'Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 11400H/8GB/512GB/6GB RTX3060/144Hz/Win10 (NH.QDGSV.003)', '{\"CPU:\":\"i5, 11400H, 2.7GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 8GB + 1 khe r\\u1eddi), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"512 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 1TB), H\\u1ed7 tr\\u1ee3 khe c\\u1eafm HDD SATA (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 2TB), H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 1TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 144Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3060 6GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 10 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 363.4 mm - R\\u1ed9ng 255 mm - D\\u00e0y 23.9 mm - N\\u1eb7ng 2.2 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:09:59', '2022-05-26 03:09:59', NULL),
(7, 3, 'Laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H/16GB/512GB/4GB RTX3050Ti/165Hz/Win11 (82JK00FNVN)', '{\"CPU:\":\"i7, 11800H, 2.30 GHz\",\"RAM:\":\"16 GB, DDR4 2 khe (1 khe 8GB + 1 khe 8GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"512 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 1TB (2280) \\/ 512GB (2242)), H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 165Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3050Ti 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"1 x USB 3.2 (Always on), 2 x Thunderbolt 4 USB-C, 3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45)\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 362.56 mm - R\\u1ed9ng 260.61 mm - D\\u00e0y 25.75 mm - N\\u1eb7ng 2.4 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:00', '2022-05-26 03:10:00', NULL),
(10, 3, 'Laptop MSI Gaming GE66 Raider 11UG i7 11800H/16GB/2TB SSD/8GB RTX3070/360Hz/Balo/Chuột/Win10 (258VN)', '{\"CPU:\":\"i7, 11800H, 2.30 GHz\",\"RAM:\":\"16 GB, DDR4 2 khe (1 khe 8GB + 1 khe 8GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"2 TB SSD NVMe PCIe, H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 2TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 360Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3070 8GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), Mini DisplayPort, Thunderbolt 4 USB-C, USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 10 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf kim lo\\u1ea1i\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 358 mm - R\\u1ed9ng 267 mm - D\\u00e0y 23.4 mm - N\\u1eb7ng 2.38 Kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:00', '2022-05-26 03:10:00', NULL),
(11, 3, 'Laptop MSI Gaming GS66 Stealth 11UG i7 11800H/32GB/2TB SSD/8GB RTX3070 Max-Q/360Hz/Balo/Chuột/Win10 (219VN)', '{\"CPU:\":\"i7, 11800H, 2.30 GHz\",\"RAM:\":\"32 GB, DDR4 2 khe (1 khe 16GB + 1 khe 16GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"2 TB SSD NVMe PCIe, H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 2TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 360Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3070 Max-Q 8GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), Thunderbolt 4 USB-C, USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 10 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf kim lo\\u1ea1i\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 358.3 mm - R\\u1ed9ng 248 mm - D\\u00e0y 19.8 mm - N\\u1eb7ng 2.1 Kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:01', '2022-05-26 03:10:01', NULL),
(2, 3, 'Laptop GIGABYTE Gaming G5 i5 10500H/16GB/512GB/6GB RTX3060/144Hz/Win10 (5S11130SH)', '{\"CPU:\":\"i5, 10500H, 2.5GHz\",\"RAM:\":\"16 GB, DDR4 2 khe (1 khe 8GB + 1 khe 8GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"H\\u1ed7 tr\\u1ee3 khe c\\u1eafm HDD SATA (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 2TB), H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 1TB), 512 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 1TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 144Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3060 6GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"2 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), Mini DisplayPort, USB 2.0, USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 10 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 361 mm - R\\u1ed9ng 258 mm - D\\u00e0y 24.9 mm - N\\u1eb7ng 2.2 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:02', '2022-05-26 03:10:02', NULL),
(5, 3, 'Laptop HP Gaming VICTUS 16 d0198TX i7 11800H/8GB/32GB+512GB/4GB RTX3050Ti/Win11 (4R0U0PA)', '{\"CPU:\":\"i7, 11800H, 2.30 GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 4GB + 1 khe 4GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"512 GB SSD NVMe PCIe, H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 1TB), Intel Optane 32GB (H10)\",\"M\\u00e0n h\\u00ecnh:\":\"16.1\\\", Full HD (1920 x 1080), 144Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3050Ti 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"1x SuperSpeed USB Type-C, 3x SuperSpeed USB A, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45)\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 370 mm - R\\u1ed9ng 260 mm - D\\u00e0y 23.5 mm - N\\u1eb7ng 2.46 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:02', '2022-05-26 03:10:02', NULL),
(4, 3, 'Laptop Lenovo IdeaPad Gaming 3 15IHU6 i5 11300H/8GB/512GB/4GB GTX1650/120Hz/Win11 (82K10178VN)', '{\"CPU:\":\"i5, 11300H, 3.1GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 4GB + 1 khe 4GB), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"512 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 1TB (2280) \\/ 512GB (2242)), H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm HDD SATA (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 1TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 120Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, GTX 1650 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"2 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 359.6 mm - R\\u1ed9ng 251.9 mm - D\\u00e0y 24.2 mm - N\\u1eb7ng 2.25 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2022\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:03', '2022-05-26 03:10:03', NULL),
(11, 3, 'Laptop Dell Gaming G15 5515 R5 5600H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11 (P105F004CGR)', '{\"CPU:\":\"Ryzen 5, 5600H, 3.3GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 8GB + 1 khe r\\u1eddi), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"256 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 2TB (2280) \\/ 1TB (2230)), Kh\\u00f4ng h\\u1ed7 tr\\u1ee3 khe c\\u1eafm HDD\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 120Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3050 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"1 x USB 3.2, 2 x USB 2.0, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL + Office Home & Student 2021 v\\u0129nh vi\\u1ec5n\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 357.26 mm - R\\u1ed9ng 272.11 mm - D\\u00e0y 26.9 mm - N\\u1eb7ng 2.8 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:03', '2022-05-26 03:10:03', NULL),
(11, 3, 'Laptop Acer Nitro 5 Gaming AN515 57 720A i7 11800H/8GB/512GB/4GB RTX3050Ti/144Hz/Win11 (NH.QEQSV.004)', '{\"CPU:\":\"i7, 11800H, 2.30 GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 8GB + 1 khe r\\u1eddi), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"512 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 1TB), H\\u1ed7 tr\\u1ee3 khe c\\u1eafm HDD SATA (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 2TB), H\\u1ed7 tr\\u1ee3 th\\u00eam 1 khe c\\u1eafm SSD M.2 PCIe m\\u1edf r\\u1ed9ng (n\\u00e2ng c\\u1ea5p t\\u1ed1i \\u0111a 1TB)\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 144Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3050Ti 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 363.4 mm - R\\u1ed9ng 255 mm - D\\u00e0y 23.9 mm - N\\u1eb7ng 2.2 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:04', '2022-05-26 03:10:04', NULL),
(8, 3, 'Laptop Dell Gaming G15 5511 i5 11400H/8GB/256GB/4GB RTX3050/120Hz/OfficeHS/Win11 (70266676)', '{\"CPU:\":\"i5, 11400H, 2.7GHz\",\"RAM:\":\"8 GB, DDR4 2 khe (1 khe 8GB + 1 khe r\\u1eddi), 3200 MHz\",\"\\u1ed4 c\\u1ee9ng:\":\"256 GB SSD NVMe PCIe (C\\u00f3 th\\u1ec3 th\\u00e1o ra, l\\u1eafp thanh kh\\u00e1c t\\u1ed1i \\u0111a 2TB (2280) \\/ 512GB (2230))\",\"M\\u00e0n h\\u00ecnh:\":\"15.6\\\", Full HD (1920 x 1080), 120Hz\",\"Card m\\u00e0n h\\u00ecnh:\":\"Card r\\u1eddi, RTX 3050 4GB\",\"C\\u1ed5ng k\\u1ebft n\\u1ed1i:\":\"3 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, LAN (RJ45), USB Type-C\",\"\\u0110\\u1eb7c bi\\u1ec7t:\":\"C\\u00f3 \\u0111\\u00e8n b\\u00e0n ph\\u00edm\",\"H\\u1ec7 \\u0111i\\u1ec1u h\\u00e0nh:\":\"Windows 11 Home SL + Office Home & Student 2021 v\\u0129nh vi\\u1ec5n\",\"Thi\\u1ebft k\\u1ebf:\":\"V\\u1ecf nh\\u1ef1a\",\"K\\u00edch th\\u01b0\\u1edbc, tr\\u1ecdng l\\u01b0\\u1ee3ng:\":\"D\\u00e0i 357 mm - R\\u1ed9ng 272 mm - D\\u00e0y 25 mm - N\\u1eb7ng 2.81 kg\",\"Th\\u1eddi \\u0111i\\u1ec3m ra m\\u1eaft:\":\"2021\"}', 'Mô tả ko crawl dc', 0, '["Loại"]', 1, '2022-05-26 03:10:04', '2022-05-26 03:10:04', NULL);


INSERT INTO `ct_san_phams` (`SanPhamId`, `SoLuongTon`, `GiaNhap`, `GiaBan`, `ThuocTinhValue`, `TrangThai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29990000, 30990000, '[\"8GB\\/128GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29990000, 30990000, '[\"8GB\\/128GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29990000, 30990000, '[\"8GB\\/128GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29990000, 30990000, '[\"8GB\\/128GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"12GB\\/256GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"12GB\\/256GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"12GB\\/256GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"12GB\\/256GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"12GB\\/512GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"12GB\\/512GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"12GB\\/512GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"12GB\\/512GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),

(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Tím\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Vàng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11490000, 12490000, '[\"64GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Tím\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Vàng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12490000, 13490000, '[\"128GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Tím\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Vàng\"]', 1, NULL, NULL, NULL),
(2, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17490000, 18490000, '[\"256GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),

(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8390000, 8490000, '[\"Reno7 4G\",\"Bạc\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8390000, 8490000, '[\"Reno7 4G\",\"Đen\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10490000, 10490000, '[\"Reno7 Z 5G\",\"Bạc\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10490000, 10490000, '[\"Reno7 Z 5G\",\"Đen\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12890000, 12990000, '[\"Reno7 5G\",\"Bạc\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12890000, 12990000, '[\"Reno7 5G\",\"Đen\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17990000, 18990000, '[\"Reno7 Pro 5G\",\"Bạc\"]', 1, NULL, NULL, NULL),
(3, (SELECT FLOOR((RAND() * (5-1+1))+1)), 17990000, 18990000, '[\"Reno7 Pro 5G\",\"Đen\"]', 1, NULL, NULL, NULL),

(4, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4190000, 4290000, '[\"64GB\",\"Xanh ngọc\"]', 1, NULL, NULL, NULL),
(4, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4190000, 4290000, '[\"64GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(4, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4890000, 4990000, '[\"128GB\",\"Xanh ngọc\"]', 1, NULL, NULL, NULL),
(4, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4890000, 4990000, '[\"128GB\",\"Đen\"]', 1, NULL, NULL, NULL),

(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10890000, 10990000, '[\"128GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10890000, 10990000, '[\"128GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10890000, 10990000, '[\"128GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11990000, 11990000, '[\"256GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11990000, 11990000, '[\"256GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(5, (SELECT FLOOR((RAND() * (5-1+1))+1)), 11990000, 11990000, '[\"256GB\",\"Xám\"]', 1, NULL, NULL, NULL),

(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 2890000, 2990000, '[\"3GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 2890000, 2990000, '[\"3GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 2890000, 2990000, '[\"3GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),
(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3390000, 3490000, '[\"4GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3390000, 3490000, '[\"4GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(6, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3390000, 3490000, '[\"4GB\",\"Đỏ\"]', 1, NULL, NULL, NULL),

(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7390000, 7490000, '[\"Note 11 Pro\",\"Trắng\"]', 1, NULL, NULL, NULL),
(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7390000, 7490000, '[\"Note 11 Pro\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7390000, 7490000, '[\"Note 11 Pro\",\"Xám\"]', 1, NULL, NULL, NULL),
(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Note 11 Pro 5G\",\"Trắng\"]', 1, NULL, NULL, NULL),
(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Note 11 Pro 5G\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(7, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Note 11 Pro 5G\",\"Xám\"]', 1, NULL, NULL, NULL),

(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6490000, 6490000, '[\"Note 11S 4G\",\"Đen\"]', 1, NULL, NULL, NULL),
(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6490000, 6490000, '[\"Note 11S 4G\",\"Xanh dương đậm\"]', 1, NULL, NULL, NULL),
(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6490000, 6490000, '[\"Note 11S 4G\",\"Xanh dương nhạt\"]', 1, NULL, NULL, NULL),
(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6690000, 6690000, '[\"Note 11S 5G\",\"Đen\"]', 1, NULL, NULL, NULL),
(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6690000, 6690000, '[\"Note 11S 5G\",\"Xanh dương đậm\"]', 1, NULL, NULL, NULL),
(8, (SELECT FLOOR((RAND() * (5-1+1))+1)), 6690000, 6690000, '[\"Note 11S 5G\",\"Xanh dương nhạt\"]', 1, NULL, NULL, NULL),

(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"128GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"128GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"128GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"128GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '[\"128GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"256GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"256GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"256GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"256GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '[\"256GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '[\"512GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '[\"512GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '[\"512GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '[\"512GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '[\"512GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '[\"1TB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '[\"1TB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '[\"1TB\",\"Xám\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '[\"1TB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(9, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '[\"1TB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),

(10, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Xanh lá\"]', 1, NULL, NULL, NULL),
(10, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Tím\"]', 1, NULL, NULL, NULL),
(10, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Trắng\"]', 1, NULL, NULL, NULL),
(10, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8890000, 8990000, '[\"Đen\"]', 1, NULL, NULL, NULL),

(11, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3390000, 3490000, '[\"Y15s\",\"Xanh đen\"]', 1, NULL, NULL, NULL),
(11, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3390000, 3490000, '[\"Y15s\",\"Trắng & Xanh\"]', 1, NULL, NULL, NULL),
(11, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3690000, 3790000, '[\"Y15a\",\"Xanh đen\"]', 1, NULL, NULL, NULL),
(11, (SELECT FLOOR((RAND() * (5-1+1))+1)), 3690000, 3790000, '[\"Y15a\",\"Trắng & Xanh\"]', 1, NULL, NULL, NULL),

(12, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4890000, 4990000, '[\"Xanh lá\"]', 1, NULL, NULL, NULL),
(12, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4890000, 4990000, '[\"Đen\"]', 1, NULL, NULL, NULL),
(12, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4890000, 4990000, '[\"Xanh Dương\"]', 1, NULL, NULL, NULL),

(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 36890000, 36990000, '[\"256GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 36890000, 36990000, '[\"256GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 36890000, 36990000, '[\"256GB\",\"Xanh rêu\"]', 1, NULL, NULL, NULL),
(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 39890000, 39990000, '[\"512GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 39890000, 39990000, '[\"512GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(13, (SELECT FLOOR((RAND() * (5-1+1))+1)), 39890000, 39990000, '[\"512GB\",\"Xanh rêu\"]', 1, NULL, NULL, NULL),

(14, (SELECT FLOOR((RAND() * (5-1+1))+1)), 30990000, 30990000, '[\"Đen\"]', 1, NULL, NULL, NULL),
(14, (SELECT FLOOR((RAND() * (5-1+1))+1)), 30990000, 30990000, '[\"Trắng\"]', 1, NULL, NULL, NULL),

(15, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28990000, 28990000, '[\"Xám\"]', 1, NULL, NULL, NULL),
(15, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28990000, 28990000, '[\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(15, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28990000, 28990000, '[\"Bạc\"]', 1, NULL, NULL, NULL),

(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"128GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"128GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"128GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"128GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"128GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29890000, 29990000, '[\"256GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29890000, 29990000, '[\"256GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29890000, 29990000, '[\"256GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29890000, 29990000, '[\"256GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 29890000, 29990000, '[\"256GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 40890000, 40990000, '[\"512GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 40890000, 40990000, '[\"512GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 40890000, 40990000, '[\"512GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 40890000, 40990000, '[\"512GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 40890000, 40990000, '[\"512GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 44590000, 44690000, '[\"1TB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 44590000, 44690000, '[\"1TB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 44590000, 44690000, '[\"1TB\",\"Xám\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 44590000, 44690000, '[\"1TB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(16, (SELECT FLOOR((RAND() * (5-1+1))+1)), 44590000, 44690000, '[\"1TB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),

(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 26190000, 26290000, '[\"256GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 26190000, 26290000, '[\"256GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 26190000, 26290000, '[\"256GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 26190000, 26290000, '[\"256GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28490000, 28490000, '[\"512GB\",\"Xám\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28490000, 28490000, '[\"512GB\",\"Xanh Dương\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28490000, 28490000, '[\"512GB\",\"Bạc\"]', 1, NULL, NULL, NULL),
(17, (SELECT FLOOR((RAND() * (5-1+1))+1)), 28490000, 28490000, '[\"512GB\",\"Vàng đồng\"]', 1, NULL, NULL, NULL),

(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25890000, 25990000, '[\"8GB\\/128GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25890000, 25990000, '[\"8GB\\/128GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25890000, 25990000, '[\"8GB\\/128GB\",\"Hồng\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25890000, 25990000, '[\"8GB\\/128GB\",\"Đen\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"8GB\\/256GB\",\"Trắng\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"8GB\\/256GB\",\"Xanh lá\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"8GB\\/256GB\",\"Hồng\"]', 1, NULL, NULL, NULL),
(18, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27390000, 27490000, '[\"8GB\\/256GB\",\"Đen\"]', 1, NULL, NULL, NULL),

(19, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7290000, 7290000, '[\"327 lít\"]', 1, NULL, NULL, NULL),
(20, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8340000, 8340000, '[\"260 lít\"]', 1, NULL, NULL, NULL),
(21, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8830000, 8830000, '[\"305 lít\"]', 1, NULL, NULL, NULL),
(21, (SELECT FLOOR((RAND() * (5-1+1))+1)), 13890000, 13890000, '[\"410 lít\"]', 1, NULL, NULL, NULL),

(22, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8590000, 8590000, '[\"280 lít\"]', 1, NULL, NULL, NULL),
(23, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8790000, 8790000, '[\"271 lít\"]', 1, NULL, NULL, NULL),
(24, (SELECT FLOOR((RAND() * (5-1+1))+1)), 8790000, 8790000, '[\"245 lít\"]', 1, NULL, NULL, NULL),
(25, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4790000, 4790000, '[\"100 lít\"]', 1, NULL, NULL, NULL),
(26, (SELECT FLOOR((RAND() * (5-1+1))+1)), 4290000, 4290000, '[\"107 lít\"]', 1, NULL, NULL, NULL),
(27, (SELECT FLOOR((RAND() * (5-1+1))+1)), 5050000, 5050000, '[\"208 lít\"]', 1, NULL, NULL, NULL),
(28, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7990000, 7990000, '[\"192 lít\"]', 1, NULL, NULL, NULL),
(28, (SELECT FLOOR((RAND() * (5-1+1))+1)), 9290000, 9290000, '[\"212 lít\"]', 1, NULL, NULL, NULL),
(28, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10890000, 10890000, '[\"252 lít\"]', 1, NULL, NULL, NULL),

(29, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7990000, 7990000, '[\"271 lít\"]', 1, NULL, NULL, NULL),
(30, (SELECT FLOOR((RAND() * (5-1+1))+1)), 5440000, 5440000, '[\"165 lít\"]', 1, NULL, NULL, NULL),
(31, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7850000, 7850000, '[\"220 lít\"]', 1, NULL, NULL, NULL),
(32, (SELECT FLOOR((RAND() * (5-1+1))+1)), 16990000, 16990000, '[\"761 lít\"]', 1, NULL, NULL, NULL),
(33, (SELECT FLOOR((RAND() * (5-1+1))+1)), 15790000, 15790000, '[\"485 lít\"]', 1, NULL, NULL, NULL),

(34, (SELECT FLOOR((RAND() * (5-1+1))+1)), 9050000, 9050000, '[\"240 lít\"]', 1, NULL, NULL, NULL),
(35, (SELECT FLOOR((RAND() * (5-1+1))+1)), 13890000, 13890000, '[\"530 lít\"]', 1, NULL, NULL, NULL),
(36, (SELECT FLOOR((RAND() * (5-1+1))+1)), 10990000, 10990000, '[\"290 lít\"]', 1, NULL, NULL, NULL),
(37, (SELECT FLOOR((RAND() * (5-1+1))+1)), 12000000, 12000000, '[\"340 lít\"]', 1, NULL, NULL, NULL),
(38, (SELECT FLOOR((RAND() * (5-1+1))+1)), 7290000, 7290000, '[\"140 lít\"]', 1, NULL, NULL, NULL),


(39, (SELECT FLOOR((RAND() * (5-1+1))+1)), 26390000, 26390000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(40, (SELECT FLOOR((RAND() * (5-1+1))+1)), 39990000, 39990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(41, (SELECT FLOOR((RAND() * (5-1+1))+1)), 52990000, 52990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(42, (SELECT FLOOR((RAND() * (5-1+1))+1)), 53990000, 53990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(43, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25990000, 25990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(44, (SELECT FLOOR((RAND() * (5-1+1))+1)), 30490000, 30490000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(45, (SELECT FLOOR((RAND() * (5-1+1))+1)), 20990000, 20990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(46, (SELECT FLOOR((RAND() * (5-1+1))+1)), 24990000, 24990000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(47, (SELECT FLOOR((RAND() * (5-1+1))+1)), 25910000, 25910000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL),
(48, (SELECT FLOOR((RAND() * (5-1+1))+1)), 27490000, 27490000, '[\"ThuocTinhToHop\"]', 1, NULL, NULL, NULL);



INSERT INTO `hinh_anhs` (`SanPhamId`, `HinhAnh`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Galaxy-S22-Ultra-Burgundy-200x200.jpg', '2022-05-20 00:28:06', '2022-05-20 00:28:06', NULL),
(1, 'Galaxy-S22-Ultra-White-200x200.jpg', '2022-05-20 00:28:06', '2022-05-20 00:28:06', NULL),
(1, 'Galaxy-S22-Ultra-Black-200x200.jpg', '2022-05-20 00:28:07', '2022-05-20 00:28:07', NULL),
(1, 'Galaxy-S22-Ultra-Green-200x200.jpg', '2022-05-20 00:28:07', '2022-05-20 00:28:07', NULL),
(2, 'iphone-xi-xanhla-200x200.jpg', '2022-05-20 00:28:07', '2022-05-20 00:28:07', NULL),
(2, 'iphone-xi-tim-200x200.jpg', '2022-05-20 00:28:08', '2022-05-20 00:28:08', NULL),
(2, 'iphone-xi-den-200x200.jpg', '2022-05-20 00:28:08', '2022-05-20 00:28:08', NULL),
(2, 'iphone-11-trang-200x200.jpg', '2022-05-20 00:28:08', '2022-05-20 00:28:08', NULL),
(2, 'iphone-xi-vang-200x200.jpg', '2022-05-20 00:28:08', '2022-05-20 00:28:08', NULL),
(2, 'iphone-xi-do-200x200.jpg', '2022-05-20 00:28:09', '2022-05-20 00:28:09', NULL),
(3, 'oppo-reno7-z-5g-thumb-1-1-200x200.jpg', '2022-05-20 00:28:10', '2022-05-20 00:28:10', NULL),
(3, 'oppo-reno7-z-5g-thumb-2-1-200x200.jpg', '2022-05-20 00:28:10', '2022-05-20 00:28:10', NULL),
(4, 'realme-c35-thumb-new-200x200.jpg', '2022-05-20 00:28:11', '2022-05-20 00:28:11', NULL),
(4, 'realme-c35-black-thumb-200x200.jpg', '2022-05-20 00:28:11', '2022-05-20 00:28:11', NULL),
(5, 'Xiaomi-11T-White-1-2-3-200x200.jpg', '2022-05-20 00:28:12', '2022-05-20 00:28:12', NULL),
(5, 'Xiaomi-11T-Blue-200x200.jpg', '2022-05-20 00:28:12', '2022-05-20 00:28:12', NULL),
(5, 'Xiaomi-11T-Grey-200x200.jpg', '2022-05-20 00:28:12', '2022-05-20 00:28:12', NULL),
(6, 'samsung-galaxy-a03-xanh-thumb-200x200.jpg', '2022-05-20 00:28:12', '2022-05-20 00:28:12', NULL),
(6, 'samsung-galaxy-a03-den-thumb-200x200.jpg', '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(6, 'samsung-galaxy-a03-do-thumb-200x200.jpg', '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(7, 'xiaomi-redmi-note-11-pro-trang-thumb-200x200.jpg', '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(7, 'xiaomi-redmi-note-11-pro-xanh-thumb-200x200.jpg', '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(7, 'xiaomi-redmi-note-11-pro-den-thumb-200x200.jpg', '2022-05-20 00:28:13', '2022-05-20 00:28:13', NULL),
(8, 'xiaomi-redmi-note-11s-5g-xanh-lam-thumb-1-200x200.jpg', '2022-05-20 00:28:14', '2022-05-20 00:28:14', NULL),
(8, 'xiaomi-redmi-note-11s-5g-lam-hong-thumb-200x200.jpg', '2022-05-20 00:28:14', '2022-05-20 00:28:14', NULL),
(9, 'iphone-13-pro-max-gold-1-200x200.jpg', '2022-05-20 00:28:15', '2022-05-20 00:28:15', NULL),
(9, 'iphone-13-pro-max-silver-200x200.jpg', '2022-05-20 00:28:15', '2022-05-20 00:28:15', NULL),
(9, 'iphone-13-pro-max-graphite-200x200.jpg', '2022-05-20 00:28:15', '2022-05-20 00:28:15', NULL),
(9, 'iphone-13-pro-max-xanh-la-thumb-200x200.jpg', '2022-05-20 00:28:15', '2022-05-20 00:28:15', NULL),
(9, 'iphone-13-pro-max-sierra-blue-200x200.jpg', '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(10, 'samsung-galaxy-a52s-5g-mint-200x200.jpg', '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(10, 'samsung-galaxy-a52s-5g-violet-200x200.jpg', '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(10, 'samsung-galaxy-a52s-5g-white-200x200.jpg', '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(10, 'samsung-galaxy-a52s-5g-black-200x200.jpg', '2022-05-20 00:28:16', '2022-05-20 00:28:16', NULL),
(11, 'Vivo-y15s-2021-xanh-den-200x200.jpg', '2022-05-20 00:28:17', '2022-05-20 00:28:17', NULL),
(11, 'Vivo-y15s-2021-xanh-thuy-tinh-200x200.jpg', '2022-05-20 00:28:17', '2022-05-20 00:28:17', NULL),
(12, 'oppo-a55-4g-thumb-new-200x200.jpg', '2022-05-20 00:28:17', '2022-05-20 00:28:17', NULL),
(12, 'oppo-a55-4g-black-200x200.jpg', '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(12, 'oppo-a55-4g-blue-200x200.jpg', '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(13, 'samsung-galaxy-z-fold-3-silver-1-200x200.jpg', '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(13, 'samsung-galaxy-z-fold-3-black-1-200x200.jpg', '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(13, 'samsung-galaxy-z-fold-3-green-1-200x200.jpg', '2022-05-20 00:28:18', '2022-05-20 00:28:18', NULL),
(14, 'oppo-find-x5-pro-den-thumb-200x200.jpg', '2022-05-20 00:28:19', '2022-05-20 00:28:19', NULL),
(14, 'oppo-find-x5-pro-trang-thumb-1-200x200.jpg', '2022-05-20 00:28:19', '2022-05-20 00:28:19', NULL),
(15, 'iphone-12-pro-max-xam-new-600x600-200x200.jpg', '2022-05-20 00:28:20', '2022-05-20 00:28:20', NULL),
(15, 'iphone-12-pro-max-xanh-duong-new-600x600-200x200.jpg', '2022-05-20 00:28:20', '2022-05-20 00:28:20', NULL),
(15, 'iphone-12-pro-max-trang-bac-600x600-200x200.jpg', '2022-05-20 00:28:20', '2022-05-20 00:28:20', NULL),
(16, 'iphone-13-pro-sierra-blue-200x200.jpg', '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(16, 'iphone-13-pro-gold-1-200x200.jpg', '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(16, 'iphone-13-pro-graphite-200x200.jpg', '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(16, 'iphone-13-pro-silver-200x200.jpg', '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(16, 'iphone-13-pro-thumb-200x200.jpg', '2022-05-20 00:28:21', '2022-05-20 00:28:21', NULL),
(17, 'iphone-12-pro-xam-new-600x600-200x200.jpg', '2022-05-20 00:28:22', '2022-05-20 00:28:22', NULL),
(17, 'iphone-12-pro-xanh-duong-new-600x600-200x200.jpg', '2022-05-20 00:28:22', '2022-05-20 00:28:22', NULL),
(17, 'iphone-12-pro-bac-new-600x600-200x200.jpg', '2022-05-20 00:28:22', '2022-05-20 00:28:22', NULL),
(17, 'iphone-12-pro-vang-dong-new-600x600-200x200.jpg', '2022-05-20 00:28:22', '2022-05-20 00:28:22', NULL),
(18, 'Galaxy-S22-Plus-White-200x200.jpg', '2022-05-20 00:28:23', '2022-05-20 00:28:23', NULL),
(18, 'Galaxy-S22-Plus-Green-200x200.jpg', '2022-05-20 00:28:23', '2022-05-20 00:28:23', NULL),
(18, 'Galaxy-S22-Plus-Pink-200x200.jpg', '2022-05-20 00:28:23', '2022-05-20 00:28:23', NULL),
(18, 'Galaxy-S22-Plus-Black-200x200.jpg', '2022-05-20 00:28:23', '2022-05-20 00:28:23', NULL),

(19, 'kangaroo-kg498kx2-1-180x120.jpg', '2022-05-26 01:09:30', '2022-05-26 01:09:30', NULL),
(20, 'sanaky-vh-3699w1-1-1-180x120.jpg', '2022-05-26 01:09:31', '2022-05-26 01:09:31', NULL),
(21, 'sanaky-vh-4099a1-1-180x120.jpg', '2022-05-26 01:09:32', '2022-05-26 01:09:32', NULL),
(22, 'tu-dong-sanaky-vh-4099w3-1-180x120.jpg', '2022-05-26 01:09:33', '2022-05-26 01:09:33', NULL),
(23, 'tu-dong-hoa-phat-271-lit-hcfi-656s2d2-2-180x120.jpg', '2022-05-26 01:09:34', '2022-05-26 01:09:34', NULL),
(24, 'tu-dong-hoa-phat-245-lit-hcf-606s2d2-2-180x120.jpg', '2022-05-26 01:09:35', '2022-05-26 01:09:35', NULL),
(25, 'sanaky-vh-1599hyk-1-180x120.jpg', '2022-05-26 01:09:36', '2022-05-26 01:09:36', NULL),
(26, 'tu-dong-hoa-phat-107-lit-hcf-106s1d-2-180x120.jpg', '2022-05-26 01:09:39', '2022-05-26 01:09:39', NULL),
(27, 'tu-dong-sanaky-208-lit-tdvh-255hy2-2-180x120.jpg', '2022-05-26 01:09:40', '2022-05-26 01:09:40', NULL),
(28, 'kangaroo-kg-400nc2-1-1-180x120.jpg', '2022-05-26 01:09:41', '2022-05-26 01:09:41', NULL),
(29, 'tu-dong-hoa-phat-271-lit-hcf-656s2d2-2-180x120.jpg', '2022-05-26 01:09:42', '2022-05-26 01:09:42', NULL),
(30, 'tu-dong-lg-gn-f304wb-1-180x120.jpg', '2022-05-26 01:09:43', '2022-05-26 01:09:43', NULL),
(31, 'sanaky-vh-2899w1-1-1-180x120.jpg', '2022-05-26 01:09:44', '2022-05-26 01:09:44', NULL),
(32, 'sanaky-vh-8699hy3-1-4-180x120.jpg', '2022-05-26 01:09:44', '2022-05-26 01:09:44', NULL),
(33, 'sanaky-vh-6699w1-1-1-180x120.jpg', '2022-05-26 01:09:47', '2022-05-26 01:09:47', NULL),
(34, 'tu-mat-sanaky-240-lit-tmvh308kl-1-180x120.jpg', '2022-05-26 01:09:47', '2022-05-26 01:09:47', NULL),
(35, 'sanaky-vh-6699hy3-1-org.jpg', '2022-05-26 01:09:48', '2022-05-26 01:09:48', NULL),
(36, 'tu-mat-sanaky-inverter-290-lit-tmvh358k3l-1-1-180x120.jpg', '2022-05-26 01:09:49', '2022-05-26 01:09:49', NULL),
(37, 'tu-mat-sanaky-340-lit-tmvh408wl-1-180x120.jpg', '2022-05-26 01:09:50', '2022-05-26 01:09:50', NULL),
(38, 'kangaroo-kg-265nc1-1-180x120.jpg', '2022-05-26 01:09:51', '2022-05-26 01:09:51', NULL),


(39, 'acer-nitro-5-gaming-an515-57-5831-i5-nhqdgsv003-1-1-180x125.jpg', '2022-05-26 03:09:59', '2022-05-26 03:09:59', NULL),
(40, 'lenovo-gaming-legion-5-15ith6-i7-82jk00fnvn-1-180x125.jpg', '2022-05-26 03:10:00', '2022-05-26 03:10:00', NULL),
(41, 'msi-gaming-ge66-raider-11ug-i7-258vn-1-1-180x125.jpg', '2022-05-26 03:10:00', '2022-05-26 03:10:00', NULL),
(42, 'msi-gaming-gs66-stealth-11ug-i7-219vn-1-1-180x125.jpg', '2022-05-26 03:10:01', '2022-05-26 03:10:01', NULL),
(43, 'gigabyte-gaming-g5-i5-5s11130sh-1-1-180x125.jpg', '2022-05-26 03:10:02', '2022-05-26 03:10:02', NULL),
(44, 'hp-gaming-victus-16-d0198tx-i7-4r0u0pa-1-1-180x125.jpg', '2022-05-26 03:10:02', '2022-05-26 03:10:02', NULL),
(45, 'lenovo-ideapad-gaming-3-15ihu6-i5-82k10178vn-1-180x125.jpg', '2022-05-26 03:10:03', '2022-05-26 03:10:03', NULL),
(46, 'dell-gaming-g15-5515-r5-p105f004cgr-1-1-180x125.jpg', '2022-05-26 03:10:03', '2022-05-26 03:10:03', NULL),
(47, 'acer-nitro-5-gaming-an515-57-720a-i7-nhqeqsv004-1-180x125.jpg', '2022-05-26 03:10:04', '2022-05-26 03:10:04', NULL),
(48, 'dell-gaming-g15-5511-i5-70266676-1-1-180x125.jpg', '2022-05-26 03:10:05', '2022-05-26 03:10:05', NULL);





insert into Chuong_Trinh_Khuyen_Mais(TenChuongTrinh,MoTa,FromDate,ToDate,created_at) values(N'Khuyến mãi cực hot ngày 20/11',N' giảm giá đến 5000đ các loại phụ kiện','2021-11-20','2022-12-01','2021-10-19');

insert into CT_Chuong_Trinh_KMs(ChuongTrinhKhuyenMaiId,CTSanPhamId,GiamGia,SoLuong,created_at)
SELECT a.Id,b.Id,5000,15,'2021-11-21'
from Chuong_Trinh_Khuyen_Mais as a, ct_san_phams as b
INNER JOIN san_phams as c ON b.SanPhamId=c.id
WHERE c.LoaiSanPhamId=1 and a.Id=1;


insert into Don_Vi_Van_Chuyens(TenDonViVanChuyen,Website,Email,Phone) values
(N'Viettel Post','https://www.viettelpost.com.vn/','viettelpost@gmail.com','84462660306'),
(N'Vietnam Post','https://www.ems.com.vn/','Vietnampost@gmail.com','84435371552'),
(N'Giao Hàng Nhanh','https://giaohangnhanh.vn/','giaohangnhanh@gmail.com','18001201'),
(N'Giao Hàng Tiết Kiệm','https://giaohangtietkiem.vn/','giaohangtietkiem@gmail.com','19006092'),
(N'Kerry Express','https://kerryexpress.com.vn/','kerryexpress@gmail.com','19006663'),
(N'SShip','https://sship.vn/','sship@gmail.com','1900969684'),
(N'Shipchung','https://www.shipchung.vn/','shipchung@gmail.com','1900636030');

insert into Nguoi_Van_Chuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,created_at) values
('0484658492',1,N'Nguyễn Huy Tự','1979-12-03',1,null,'image-5.jpg','2021-11-21'),
('0927281266',2,N'Cô Bắc','1981-04-07',0,null,'image-6.jpg','2021-11-21'),
('0325167511',3,N'Mạc Thị Bưởi','1998-07-05',1,null,'thumb-1.jpg','2021-11-21'),
('0204082858',4,N'Lê Công Kiều','2001-11-09',1,null,'thumb-2.jpg','2021-11-21'),
('0506788273',5,N'Hồ Hảo Hớn','1985-12-02',1,null,'thumb-3.jpg','2021-11-21'),
('0506781231',6,N'Trần Phi Long','1997-06-12',0,null,'thumb-4.jpg','2021-11-21'),
('0298123123',7,N'Dương Tấn Tài','1989-08-29',1,null,'thumb-5.jpg','2021-11-21');

insert into Dia_Chis(TaiKhoanId,TenNguoiNhan,Phone,TinhThanhPho,QuanHuyen,PhuongXa,DiaChiChiTiet,CodeTinhThanhPho,CodeQuanHuyen,CodePhuongXa) values
(5,'Dat ne`','091928739',N'Thành phố Hồ Chí Minh',N'Huyện Bình Chánh',N'Thị trấn Tân Túc',N'123/ds1 Duong ABCXYZ',79,785,27595),
(6,'Dattt ne``','0901283123',N'Thành phố Hà Nội',N'Quận Long Biên',N'Phường Thượng Thanh',N'123/asasd Đường An Dương Vương',1,4,115),
(7,'Dat ne`','091928739',N'Thành phố Hồ Chí Minh',N'Huyện Bình Chánh',N'Thị trấn Tân Túc',N'123/ds1 Duong ABCXYZ',79,785,27595),
(8,'Dattt ne``','0901283123',N'Thành phố Hà Nội',N'Quận Long Biên',N'Phường Thượng Thanh',N'123/asasd Đường An Dương Vương',1,4,115);


insert into phuong_thuc_thanh_toans(TenPhuongThuc) values
('Khi nhận hàng'),
('Thẻ tín dụng'),
('MOMO'),
('Viettel Pay'),
('Zalo Pay');

insert into vouchers(Code,GiamGia,FromDate,ToDate,SoLuong)
SELECT SUBSTR(MD5(RAND()), 1, 10) AS Code, (SELECT FLOOR((RAND() * (10-5+1))+5)*10000) AS GiamGia,
(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2021-1-1') - UNIX_TIMESTAMP('2022-01-01')) + UNIX_TIMESTAMP('2022-01-01'))) AS FromDate,
(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2022-1-2') - UNIX_TIMESTAMP('2022-05-01')) + UNIX_TIMESTAMP('2022-05-01'))) AS ToDate,
(SELECT FLOOR((RAND() * (100-50+1))+50)) AS SoLuong
FROM ct_san_phams as b ORDER BY RAND() LIMIT 100;

insert into voucher_tai_khoans(TaiKhoanId,VoucherId)
SELECT a.id,b.id FROM tai_khoans as a,vouchers as b WHERE a.LoaiTaiKhoanId=3 OR a.LoaiTaiKhoanId=4 ORDER BY RAND() LIMIT 500;


update vouchers a, (select voucherid,count(voucherid) as SLDaSuDung from voucher_tai_khoans GROUP by voucherid) b
set a.SLDaSuDung=b.SLDaSuDung
where a.id=b.voucherid;


insert into Hoa_Dons(DiaChiId,PhuongThucThanhToanId,VoucherId,TrangThai,created_at)
SELECT a.id, b.id, c.id, (SELECT FLOOR((RAND() * (5-1+1))+1)),(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2015-1-1') - UNIX_TIMESTAMP('2020-01-01')) + UNIX_TIMESTAMP('2020-01-01')))
FROM Dia_Chis as a, phuong_thuc_thanh_toans as b, vouchers as c ORDER BY RAND() LIMIT 100;


insert into CT_Hoa_Dons(HoaDonId,CTSanPhamId,SoLuong,Star)
SELECT a.id, b.id, (SELECT FLOOR((RAND() * (5-1+1))+1)), (SELECT FLOOR((RAND() * (5-0+1))+0))
FROM hoa_dons as a,ct_san_phams as b ORDER BY RAND() LIMIT 500
ON DUPLICATE KEY UPDATE CT_Hoa_Dons.SoLuong=CT_Hoa_Dons.SoLuong+1;

CALL update_TongTien_HoaDon();



insert into Gio_Hangs(TaiKhoanId,CTSanPhamId,SoLuong)
SELECT a.id,b.id,(SELECT FLOOR((RAND() * (5-1+1))+1))
FROM tai_khoans as a,ct_san_phams as b WHERE a.LoaiTaiKhoanId=3 OR a.LoaiTaiKhoanId=4 ORDER BY RAND() LIMIT 100;

insert into Yeu_Thichs(TaiKhoanId,CTSanPhamId)
SELECT a.id,b.id
FROM tai_khoans as a,ct_san_phams as b WHERE a.LoaiTaiKhoanId=3 OR a.LoaiTaiKhoanId=4 ORDER BY RAND() LIMIT 50;


insert into Lich_Su_Van_Chuyens(HoaDonId,NguoiVanChuyenId,TrangThai,created_at)
SELECT a.Id,b.Id,0,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP() - UNIX_TIMESTAMP('2021-01-01')) + UNIX_TIMESTAMP('2021-01-01')))
FROM (select * from hoa_dons where hoa_dons.TrangThai=4 or hoa_dons.TrangThai=5) as a,Nguoi_Van_Chuyens as b ORDER BY RAND() LIMIT 200;


update Lich_Su_Van_Chuyens a, (select * from hoa_dons where TrangThai=5) b
set a.TrangThai=1
where a.id=(select id from lich_su_van_chuyens where HoaDonId=b.id ORDER BY created_at DESC LIMIT 1);


insert nha_cung_caps(TenNhaCungCap,DiaChi,Email,Phone) values
('Ông bán ve chai', '383 Tran Phu St., Ward 8, Dist. 5,  Ho Chi Minh City', 'BanVeChai@gmail.com','09224954'),
('Bà bán vé số', '75/22 Avenue,  Phu Tho Ward, Binh Duong','BanVeSo@gmail.com','03560283'),
('Chị hàng xóm', '125-127 Tung Thien Vuong Street, Ward 11, District 8, 125-127 Tung Thien Vuong Street, Ward 11, District 8', 'ChiHangXom@gmail.com','091823123'),
('Tổng thống Mỹ','91/3 Tran Binh Trong, Dist.5, Ho Chi Minh City','TongThongMy@gmail.com','012398732');

insert into hoa_don_nhaps(TaiKhoanId,NhaCungCapId)
SELECT a.id,b.id
FROM tai_khoans as a,nha_cung_caps as b WHERE a.LoaiTaiKhoanId=1 OR a.LoaiTaiKhoanId=5 ORDER BY RAND() LIMIT 10;

insert into ct_hoa_don_nhaps(HoaDonNhapId,CTSanPhamId,SoLuong,GiaNhap)
SELECT a.id,b.id,(SELECT FLOOR((RAND() * (5-1+1))+1)),b.GiaNhap
FROM hoa_don_nhaps as a, ct_san_phams as b ORDER BY RAND() LIMIT 500
ON DUPLICATE KEY UPDATE ct_hoa_don_nhaps.SoLuong=ct_hoa_don_nhaps.SoLuong+1;

CALL update_TongTien_HoaDonNhap();


insert into slide_shows(HinhAnh,deleted_at) values
("banner_1.png",NULL),
("banner_2.png",NULL),
("banner_3.png",NULL),
("banner_4.png",NULL);
