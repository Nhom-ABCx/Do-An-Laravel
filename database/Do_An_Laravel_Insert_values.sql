INSERT INTO `quyens` (`Code`, `TenQuyen`, `Parent_Id`) VALUES
('slider', 'slider',0),
('sliderList', 'List slider', 1),
('sliderAdd', 'Add slider', 1),
('sliderEdit', 'Edit slider', 1),
('sliderDelete', 'Delete slider', 1),
('taiKhoan', 'taiKhoan',0),
('taiKhoanList', 'List taiKhoan', 6),
('taiKhoanAdd', 'Add taiKhoan', 6),
('taiKhoanEdit', 'Edit taiKhoan', 6),
('taiKhoanDelete', 'Delete taiKhoan', 6),
('loaiTaiKhoan', 'loaiTaiKhoan',0),
('loaiTaiKhoanList', 'List loaiTaiKhoan', 11),
('loaiTaiKhoanAdd', 'Add loaiTaiKhoan', 11),
('loaiTaiKhoanEdit', 'Edit loaiTaiKhoan', 11),
('loaiTaiKhoanDelete', 'Delete loaiTaiKhoan', 11),
('quyen', 'quyen',0),
('quyenList', 'List quyen', 16),
('quyenAdd', 'Add quyen', 16),
('quyenEdit', 'Edit quyen', 16),
('quyenDelete', 'Delete quyen', 16),
('loaiSanPham', 'loaiSanPham',0),
('loaiSanPhamList', 'List loaiSanPham', 21),
('loaiSanPhamAdd', 'Add loaiSanPham', 21),
('loaiSanPhamEdit', 'Edit loaiSanPham', 21),
('loaiSanPhamDelete', 'Delete loaiSanPham', 21),
('loaiSanPhamRestore', 'Restore loaiSanPham', 21),
('loaiSanPhamForceDelete', 'ForceDelete loaiSanPham', 21),
('sanPham', 'sanPham',0),
('sanPhamList', 'List sanPham', 28),
('sanPhamAdd', 'Add sanPham', 28),
('sanPhamEdit', 'Edit sanPham', 28),
('sanPhamDelete', 'Delete sanPham', 28),
('sanPhamRestore', 'Restore sanPham', 28),
('sanPhamForceDelete', 'ForceDelete sanPham', 28),
('hoaDon', 'hoaDon',0),
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
('ASUS'   );

insert into Loai_San_Phams(Code,TenLoai,MoTa) values
('DT',N'Điện thoại','Smart Phone'),
('DL',N'Điện lạnh',null),
('LT',N'LapTop',null),
('MA',N'Máy ảnh',null),
('MTB',N'Máy tính bảng',null),
('PK',N'Phụ kiện',null);



insert into San_Phams(TenSanPham,LuotMua,HangSanXuatId,LoaiSanPhamId,ThuocTinh,ThuocTinhToHop) values
('iPhone 13 Pro Max',5,2,1,'{
"Màn hình" : "OLED6.7Super Retina XDR",
"Hệ điều hành" : "iOS 15",
"Camera sau" : "3 camera 12 MP",
"Camera trước" : "12 MP",
"Chip" : "Apple A15 Bionic",
"Ram" : "6 GB",
"Sim" : "1 Nano SIM & 1 eSIMHỗ trợ 5G",
"Pin" : "4352 mAh20 W"
}','["Bộ nhớ trong","Màu sắc"]');


insert into ct_san_phams(SanPhamId,SoLuong,GiaNhap,GiaBan,ThuocTinhValue) values
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '["128 GB", "Vàng đồng"]'), /* 128, Vang`dong` */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '["128 GB", "Xám"]'), /* 128, xam' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '["128 GB", "Bạc"]'), /* 128, bac' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 32990000, 33990000, '["128 GB", "Xanh dương"]'), /* 128, xanh duong' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '["256 GB", "Vàng đồng"]'), /* 256, Vang`dong` */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '["256 GB", "Xám"]'), /* 256, xam' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '["256 GB", "Bạc"]'), /* 256, bac' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 35990000, 36990000, '["256 GB", "Xanh dương"]'), /* 256, xanh duong' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '["512 GB", "Vàng đồng"]'),  /* 512, Vang`dong` */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '["512 GB", "Xám"]'), /* 512, xam' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '["512 GB", "Bạc"]'), /* 512, bac' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 42990000, 43990000, '["512 GB", "Xanh dương"]'), /* 512, xanh duong' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '["1024 GB", "Vàng đồng"]'), /* 1024, Vang`dong` */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '["1024 GB", "Xám"]'), /* 1024, xam' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '["1024 GB", "Bạc"]'), /* 1024, bac' */
(1, (SELECT FLOOR((RAND() * (5-1+1))+1)), 45690000, 46690000, '["1024 GB", "Xanh dương"]'); /* 1024, xanh duong' */

insert into hinh_anhs(CTSanPhamId,HinhAnh) values
(1,'vangdong.jpg'),
(2,'xam.jpg'),
(3,'bac.jpg'),
(4,'xanhduong.jpg'),
(5,'vangdong.jpg'),
(6,'xam.jpg'),
(7,'bac.jpg'),
(8,'xanhduong.jpg'),
(9,'vangdong.jpg'),
(10,'xam.jpg'),
(11,'bac.jpg'),
(12,'xanhduong.jpg'),
(13,'vangdong.jpg'),
(14,'xam.jpg'),
(15,'bac.jpg'),
(16,'xanhduong.jpg');

insert into Chuong_Trinh_Khuyen_Mais(TenChuongTrinh,MoTa,FromDate,ToDate,created_at) values(N'Khuyến mãi cực hot ngày 20/11',N' giảm giá đến 5000đ các loại phụ kiện','2021-11-20','2022-12-01','2021-10-19');

insert into CT_Chuong_Trinh_KMs(ChuongTrinhKhuyenMaiId,CTSanPhamId,GiamGia,SoLuong,created_at)
SELECT a.Id,b.Id,5000,15,'2021-11-21' from Chuong_Trinh_Khuyen_Mais as a, ct_san_phams as b
INNER JOIN san_phams as c ON b.SanPhamId=c.id
WHERE c.LoaiSanPhamId=6 and a.Id=1;

insert into CT_Chuong_Trinh_KMs(ChuongTrinhKhuyenMaiId,CTSanPhamId,GiamGia,SoLuong,created_at)
SELECT a.Id,b.Id,10000,15,'2021-11-21' from Chuong_Trinh_Khuyen_Mais as a, ct_san_phams as b
INNER JOIN san_phams as c ON b.SanPhamId=c.id
WHERE c.LoaiSanPhamId=4 and a.Id=1;


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
SELECT a.id,b.id,b.SoLuong,b.GiaNhap
FROM hoa_don_nhaps as a, ct_san_phams as b ORDER BY RAND() LIMIT 500
ON DUPLICATE KEY UPDATE ct_hoa_don_nhaps.SoLuong=ct_hoa_don_nhaps.SoLuong+1;

update ct_hoa_don_nhaps
set ThanhTien=(SoLuong*GiaNhap);

insert into slide_shows(HinhAnh,deleted_at) values
("banner_1.png",NULL),
("banner_2.png",NULL),
("banner_3.png",NULL),
("banner_4.png",NULL);
