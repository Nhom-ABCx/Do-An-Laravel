
insert into Nhan_Viens(Username,Email,Phone,MatKhau,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,created_at) values
('Admin','Admin@gmail.com','0779597983','Admin',N'Administrator','2007/02/14',1,N'TP HCM','/storage/assets/images/avatar/NhanVien/1/image-1.jpg','1991-11-11'),
('NhanVien01','NhanVien01@gmail.com','0238506390','password123',N'Bà Huyện Thanh Quan','1997/04/14',0,N'O7, Cao Bá Nhạ, Hậu Giang','/storage/assets/images/avatar/NhanVien/2/image-2.jpg','1991-11-11'),
('NhanVien02','NhanVien02@gmail.com','0176440449','password123',N'Nguyễn Hữu Cảnh','2002/11/12',0,N'P7, Đồng Khởi, Lào Cai','/storage/assets/images/avatar/NhanVien/3/image-3.jpg','1991-11-11'),
('NhanVien03','NhanVien03@gmail.com','0300345555','password123',N'Alexandre de Rhodes','2020/08/03',0,N'B0, Lê Lai, Thái Bình','/storage/assets/images/avatar/NhanVien/4/image-4.jpg','1991-11-11');

insert into Khach_Hangs(Username,Email,Phone,MatKhau,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,created_at) values
('Khach01','Khach01@gmail.com','0618431768','password123',N'Hồ Huấn Nghiệp','1990/11/24',0,N'J5, Nguyễn Hữu Cầu, Thanh Hóa','/storage/assets/images/avatar/User/1/image-5.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach02','Khach02@gmail.com','0452803292','password123',N'Hàm Nghi','1996/10/15',0,N'D4, Huỳnh Khương Ninh, Tiền Giang','/storage/assets/images/avatar/User/2/image-6.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach03','Khach03@gmail.com','0566425150','password123',N'Hồ Tùng Mậu','1986/04/09',0,N'P1, Bùi Viện, Hải Phòng','/storage/assets/images/avatar/User/3/thumb-1.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach04','Khach04@gmail.com','0982099712','password123',N'Nguyễn Cư Trinh','1994/08/27',1,N'W7, Mai Thị Lựu, Trà Vinh','/storage/assets/images/avatar/User/4/thumb-2.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('Khach05','Khach05@gmail.com','0333641834','password123',N'Bùi Viện','1990/09/06',1,N'D3, Nam Quốc Cang, Bình Định','/storage/assets/images/avatar/User/5/thumb-3.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowgoose667', 'eva.brunet@example.com', '01-70-39-10-88', 'password123', 'Ms.Eva_Brunet', '1969-10-04 21:13:06', 0, 'Rue Barrier, Rouen, France', 'https://randomuser.me/api/portraits/women/76.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplebird327', 'tristan.moller@example.com', '16961009', 'password123', 'Mr.Tristan_Møller', '1964-08-09 17:32:23', 1, 'Græsvangen, Sønder Stenderup, Denmark', 'https://randomuser.me/api/portraits/men/99.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('orangedog977', 'anselm.abel@example.com', '0497-4150057', 'password123', 'Mr.Anselm_Abel', '1964-10-06 19:23:45', 1, 'Ahornweg, Markkleeberg, Germany', 'https://randomuser.me/api/portraits/men/46.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silvermeercat905', 'isabelle.baker@example.com', '021-635-8296', 'password123', 'Mrs.Isabelle_Baker', '1972-04-29 17:31:08', 0, 'New Street, Dungarvan, Ireland', 'https://randomuser.me/api/portraits/women/2.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redmouse558', 'selma.rasmussen@example.com', '99854271', 'password123', 'Ms.Selma_Rasmussen', '1945-04-14 07:25:06', 0, 'Skovstjernevej, Viby Sj., Denmark', 'https://randomuser.me/api/portraits/women/54.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('organiccat269', 'xavier.smith@example.com', '(170)-823-5752', 'password123', 'Mr.Xavier_Smith', '1983-01-19 03:19:46', 1, 'Mt Eden Road, Tauranga, New Zealand', 'https://randomuser.me/api/portraits/men/71.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('beautifultiger243', 'dilano.degroen@example.com', '(489)-330-0847', 'password123', 'Mr.Dilano_De Groen', '1947-05-19 20:26:13', 1, 'Duykerdam, Ens, Netherlands', 'https://randomuser.me/api/portraits/men/53.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowdog132', 'jaime.cano@example.com', '947-024-220', 'password123', 'Mr.Jaime_Cano', '1945-10-08 15:01:10', 1, 'Paseo de Extremadura, Santa Cruz de Tenerife, Spain', 'https://randomuser.me/api/portraits/men/3.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silverpanda724', 'selami.vanleeuwe@example.com', '(607)-530-6761', 'password123', 'Mr.Selami_Van Leeuwe', '1964-09-09 07:09:13', 1, 'Koppertjesland, Sint Jansteen, Netherlands', 'https://randomuser.me/api/portraits/men/64.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silversnake914', 'arianna.mendoza@example.com', '01-5137-4415', 'password123', 'Ms.Arianna_Mendoza', '1989-03-06 19:44:01', 0, 'Homestead Rd, Busselton, Australia', 'https://randomuser.me/api/portraits/women/66.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whiteladybug785', 'halil.denis@example.com', '076 624 70 22', 'password123', 'Monsieur.Halil_Denis', '1978-08-22 07:29:16', 1, 'Rue de L\Abbé-Roger-Derry, Thusis, Switzerland', 'https://randomuser.me/api/portraits/men/59.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('orangezebra649', 'winfried.bock@example.com', '0455-7981435', 'password123', 'Mr.Winfried_Böck', '1979-04-11 00:49:24', 1, 'Birkenweg, Pausa-Mühltroff, Germany', 'https://randomuser.me/api/portraits/men/53.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('biggorilla358', 'grace.stanley@example.com', '015396 56883', 'password123', 'Mrs.Grace_Stanley', '1962-03-24 15:15:53', 0, 'Manor Road, Portsmouth, United Kingdom', 'https://randomuser.me/api/portraits/women/22.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redwolf926', 'ravn.bore@example.com', '70326619', 'password123', 'Mr.Ravn_Bore', '1959-11-23 19:32:54', 1, 'Valmueveien, Valestrandfossen, Norway', 'https://randomuser.me/api/portraits/men/98.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplerabbit548', 'gina.evans@example.com', '(042)-015-6700', 'password123', 'Ms.Gina_Evans', '1975-01-17 18:11:50', 0, 'Mcgowen St, Saint Paul, United States', 'https://randomuser.me/api/portraits/women/41.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('ticklishfrog305', 'yvete.martins@example.com', '(81) 3896-1502', 'password123', 'Miss.Yvete_Martins', '1960-02-19 18:23:42', 0, 'Travessa dos Martírios, Rio Branco, Brazil', 'https://randomuser.me/api/portraits/women/35.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('sadswan412', 'lucas.johnston@example.com', '01-9246-8431', 'password123', 'Mr.Lucas_Johnston', '1951-01-15 12:27:21', 1, 'Robinson Rd, Warragul, Australia', 'https://randomuser.me/api/portraits/men/63.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinymeercat482', 'jose.ortega@example.com', '962-099-714', 'password123', 'Miss.Jose_Ortega', '1995-06-03 22:02:34', 0, 'Calle de Alcalá, Mérida, Spain', 'https://randomuser.me/api/portraits/women/26.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinyswan309', 'noah.fabre@example.com', '077 454 37 76', 'password123', 'Monsieur.Noah_Fabre', '1996-05-14 06:40:34', 1, 'Place du 8 Novembre 1942, Saanen, Switzerland', 'https://randomuser.me/api/portraits/men/26.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('crazyleopard372', 'kayla.powell@example.com', '011-887-3410', 'password123', 'Miss.Kayla_Powell', '1975-01-10 13:25:11', 0, 'Rookery Road, Balbriggan, Ireland', 'https://randomuser.me/api/portraits/women/89.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazyladybug318', 'necati.yildirim@example.com', '(044)-771-1565', 'password123', 'Mr.Necati_Yıldırım', '1971-05-05 09:53:45', 1, 'Kushimoto Sk, Çorum, Turkey', 'https://randomuser.me/api/portraits/men/52.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('bluetiger184', 'murat.basoglu@example.com', '(417)-493-7694', 'password123', 'Mr.Murat_Başoğlu', '1966-07-28 06:25:59', 1, 'Mevlana Cd, Erzurum, Turkey', 'https://randomuser.me/api/portraits/men/20.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplefish964', 'myraaly.prs@example.com', '058-72469339', 'password123', 'Mr.اميرعلي_پارسا', '1981-01-24 11:50:09', 1, 'آفریقا, خوی, Iran', 'https://randomuser.me/api/portraits/men/83.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowbird754', 'lise.giraud@example.com', '01-34-48-10-18', 'password123', 'Miss.Lise_Giraud', '1988-08-14 05:19:16', 0, 'Rue Paul Bert, Aulnay-sous-Bois, France', 'https://randomuser.me/api/portraits/women/41.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blackelephant735', 'aarshy.qsmy@example.com', '038-68498535', 'password123', 'Mr.عرشيا_قاسمی', '1967-06-16 19:53:12', 1, 'استاد قریب, ساوه, Iran', 'https://randomuser.me/api/portraits/men/22.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('sadladybug654', 'emma.ross@example.com', '193-837-2560', 'password123', 'Ms.Emma_Ross', '1947-03-07 12:57:24', 0, 'Dundas Rd, Russell, Canada', 'https://randomuser.me/api/portraits/women/1.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whitemouse706', 'antonia.gallego@example.com', '997-476-306', 'password123', 'Ms.Antonia_Gallego', '1973-08-15 11:11:37', 0, 'Calle del Pez, Almería, Spain', 'https://randomuser.me/api/portraits/women/26.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazypanda842', 'shyn.slry@example.com', '046-43829717', 'password123', 'Mr.شایان_سالاری', '1953-10-10 17:41:53', 1, 'آیت الله طالقانی, سنندج, Iran', 'https://randomuser.me/api/portraits/men/56.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinybird421', 'zachary.willis@example.com', '041-970-5705', 'password123', 'Mr.Zachary_Willis', '1995-08-22 13:42:32', 1, 'Albert Road, Tralee, Ireland', 'https://randomuser.me/api/portraits/men/58.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('heavywolf136', 'erica.morgan@example.com', '(507)-002-2277', 'password123', 'Miss.Erica_Morgan', '1974-03-24 12:16:08', 0, 'Samaritan Dr, Aubrey, United States', 'https://randomuser.me/api/portraits/women/46.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('crazypanda754', 'jaylen.vanderzwaan@example.com', '(534)-286-1389', 'password123', 'Mr.Jaylen_Van der Zwaan', '1952-04-24 18:11:57', 1, 'Clioplein, Overloon, Netherlands', 'https://randomuser.me/api/portraits/men/78.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplecat202', 'adele.joly@example.com', '02-43-99-12-72', 'password123', 'Miss.Adèle_Joly', '1989-08-09 22:27:43', 0, 'Rue Abel-Hovelacque, Nancy, France', 'https://randomuser.me/api/portraits/women/27.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('smallzebra313', 'ruben.clarke@example.com', '017684 44529', 'password123', 'Mr.Ruben_Clarke', '1980-09-05 19:13:46', 1, 'Mill Lane, St Davids, United Kingdom', 'https://randomuser.me/api/portraits/men/1.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplebird934', 'lilou.perrin@example.com', '05-83-43-99-24', 'password123', 'Ms.Lilou_Perrin', '1987-11-21 23:05:26', 0, 'Boulevard de la Duchère, Saint-Pierre, France', 'https://randomuser.me/api/portraits/women/89.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('brownfish292', 'khymy.kmyrn@example.com', '092-03645982', 'password123', 'Miss.کیمیا_كامياران', '1970-07-22 04:12:24', 0, 'میدان امام خمینی, تبریز, Iran', 'https://randomuser.me/api/portraits/women/24.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('goldensnake516', 'tale.smestad@example.com', '57356215', 'password123', 'Miss.Tale_Smestad', '1947-09-13 20:39:01', 0, 'Langbølgen, Sørland, Norway', 'https://randomuser.me/api/portraits/women/38.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('happybird837', 'alexis.chan@example.com', '757-179-0206', 'password123', 'Mrs.Alexis_Chan', '1957-12-11 03:24:31', 0, 'Pine Rd, Stirling, Canada', 'https://randomuser.me/api/portraits/women/13.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('lazysnake652', 'malou.nielsen@example.com', '96787914', 'password123', 'Mrs.Malou_Nielsen', '1949-10-23 09:12:07', 0, 'Buen, Assens, Denmark', 'https://randomuser.me/api/portraits/women/25.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('silvercat129', 'gul.gunday@example.com', '(420)-339-4996', 'password123', 'Mrs.Gül_Günday', '1965-11-23 11:09:42', 0, 'Fatih Sultan Mehmet Cd, Kayseri, Turkey', 'https://randomuser.me/api/portraits/women/22.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('happyrabbit168', 'awyn.khrymy@example.com', '090-89999548', 'password123', 'Miss.آوین_کریمی', '1980-05-27 14:27:24', 0, 'آیت الله مدرس, زاهدان, Iran', 'https://randomuser.me/api/portraits/women/3.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blackduck772', 'dora.sullivan@example.com', '(954)-636-3855', 'password123', 'Ms.Dora_Sullivan', '1961-05-25 02:42:55', 0, 'Wycliff Ave, Stockton, United States', 'https://randomuser.me/api/portraits/women/90.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('purplefish885', 'stephanie.ross@example.com', '051-945-8379', 'password123', 'Miss.Stephanie_Ross', '1992-02-25 05:51:39', 0, 'The Drive, Roscommon, Ireland', 'https://randomuser.me/api/portraits/women/70.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowpeacock450', 'serenity.mccoy@example.com', '01-2775-8588', 'password123', 'Miss.Serenity_Mccoy', '1956-10-18 13:23:55', 0, 'E North St, Bendigo, Australia', 'https://randomuser.me/api/portraits/women/65.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('redwolf324', 'luz.arias@example.com', '938-354-983', 'password123', 'Ms.Luz_Arias', '1989-08-05 18:43:59', 0, 'Paseo de Zorrilla, Alcobendas, Spain', 'https://randomuser.me/api/portraits/women/53.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('yellowpanda307', 'storm.larsen@example.com', '85506086', 'password123', 'Mr.Storm_Larsen', '1990-02-15 03:39:18', 1, 'Søvænget, Jerslev Sj, Denmark', 'https://randomuser.me/api/portraits/men/51.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('goldensnake827', 'lila.pierre@example.com', '04-00-84-09-54', 'password123', 'Mrs.Lila_Pierre', '1974-12-29 17:03:49', 0, 'Rue Dugas-Montbel, Orléans, France', 'https://randomuser.me/api/portraits/women/11.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('brownostrich388', 'wayne.rhodes@example.com', '015396 72883', 'password123', 'Mr.Wayne_Rhodes', '1970-12-25 11:36:04', 1, 'Station Road, Leicester, United Kingdom', 'https://randomuser.me/api/portraits/men/73.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('smallbird737', 'naomi.westerhof@example.com', '(485)-591-8578', 'password123', 'Miss.Naömi_Westerhof', '1958-12-06 15:09:13', 0, 'De Borstelmaker, Vreeswijk, Netherlands', 'https://randomuser.me/api/portraits/women/90.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('blueleopard929', 'ulf.nagel@example.com', '0492-1373598', 'password123', 'Mr.Ulf_Nagel', '1944-12-30 13:09:35', 1, 'Grüner Weg, Barmstedt, Germany', 'https://randomuser.me/api/portraits/men/93.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('whitemeercat301', 'tilde.rasmussen@example.com', '90306008', 'password123', 'Miss.Tilde_Rasmussen', '1954-11-25 03:00:34', 0, 'Egevangen, København Ø, Denmark', 'https://randomuser.me/api/portraits/women/1.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01')))),
('tinyelephant830', 'rebekka.schie@example.com', '65371361', 'password123', 'Mrs.Rebekka_Schie', '1966-09-24 20:57:08', 0, 'Lachmanns vei, Skarnes, Norway', 'https://randomuser.me/api/portraits/women/9.jpg',(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2000-1-1') - UNIX_TIMESTAMP('2015-01-01')) + UNIX_TIMESTAMP('2015-01-01'))));

insert into Hang_San_Xuats(Ten,DiaChi,Email,Phone) values
('Cannon','V2, Lê Thị Riêng, Hà Nam','Cannon@gmail.com','0468343337'),
('IPhone','N3, Hoàng Sa, Tây Ninh','IPhone@gmail.com','0868562476'),
('Xiaomi','Z7, Lê Thánh Tôn, Lào Cai','Xiaomi@gmail.com','0727834458'),
('SaNaKy','E4, Lê Anh Xuân, Phú Yên','SaNaKy@gmail.com','0219680334'),
('SONY','V2, Lê Thị Riêng, Hà Nam','SONY@gmail.com','0124108053'),
('SamSung','M8, Nguyễn Cư Trinh, Lai Châu','SamSung@gmail.com','0487862068'),
('ViVo','R1, Lê Công Kiều, Hải Phòng','ViVo@gmail.com','0912247804'),
('Electrolux','F3, Nguyễn Cảnh Chân, Khánh Hòa','Electrolux@gmail.com','0316892771'),
('LG','N1, Nam Quốc Cang, Nam Định','LG@gmail.com','0233681010'),
('Toshiba','J4, Calmette, Hà Nam','Toshiba@gmail.com','0268628820'),
('Acer','F9, Nguyễn Hữu Cầu, Cao Bằng','Acer@gmail.com','0883771752'),
('ASUS','H6, Huỳnh Khương Ninh, Hà Tĩnh','ASUS@gmail.com','0135349672');

insert into Loai_San_Phams(TenLoai,MoTa) values(N'Điện lạnh',null),
(N'Điện thoại','Smart Phone'),
(N'LapTop',null),
(N'Máy ảnh',null),
(N'Máy tính bảng',null),
(N'Phụ kiện',null);

insert into San_Phams(TenSanPham,MoTa,SoLuongTon,GiaNhap,GiaBan,HinhAnh,LuotMua,HangSanXuatId,LoaiSanPhamId,created_at) values
(N'Xiaomi Redmi Note 6 Pro30','64GB',10,         1000000,2000000,'DT_1.jpg',12,2,2,'2022-12-22'),
(N'Máy giặt Electrolux 10 Kg29','2 Năm',4,       5376969,6376969,'DL_1.jpg',3,8,1,'2022-12-22'),
(N'Máy giặt Beko 9Kg28','2 Năm',8,               2560459,3560459,'DL_2.jpg',5,8,1,'2022-12-22'),
(N'Samsung Inverter 1227','2 Năm',46,            9208494,10208494,'DT_2.jpg',9,6,2,'2022-12-22'),
(N'Máy giặt Toshiba 9.5 Kg26','32Gb',10,         8996345,9996345,'DL_3.jpg',1,10,1,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a125','1 Năm FullBox',39,5139972,6139972,'DT_3.jpg',0,3,2,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a224','16Gb',5,          1367603,2367603,'DT_4.jpg',2,3,2,'2022-12-22'),
(N'Đt xiaomi-redmi-5-plus23','32Gb',6,           8322064,9322064,'DT_5.jpg',3,3,2,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a122','1 Năm FullBox',17,5817358,6817358,'DT_6.jpg',7,3,2,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a221','16Gb',33,         2647340,3647340,'DT_7.jpg',8,3,2,'2022-12-22'),
(N'Đt xiaomi-redmi-5-plus20','32Gb',2,           2299870,3299870,'DT_8.jpg',90,3,2,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a119','1 Năm FullBox',24,2674972,3674972,'DT_9.jpg',4,3,2,'2022-12-22'),
(N'Điện thoại xiaomi-mi-a218','16Gb',48,         6927375,7927375,'DT_10.jpg',1,3,2,'2022-12-22'),
(N'Đt xiaomi-redmi-5-plus17','1 Năm FullBox',19, 8344018,9344018,'DT_11.jpg',2,3,2,'2022-12-22'),
(N'samsung-galaxy-tab-e-9616','1 Năm FullBox',25,5775860,6775860,'DT_12.jpg',3,6,2,'2022-12-22'),
(N'samsung-galaxy-tab-e-9615','1 Năm FullBox',23,5175337,6175337,'DT_13.jpg',7,6,2,'2022-12-22'),
(N'samsung-galaxy-tab-e-9614','1 Năm FullBox',39,3102066,4102066,'DT_14.jpg',5,6,2,'2022-12-22'),
(N'Điện thoại vivo-y85-red13','I3',43,           7205830,8205830,'DT_15.jpg',4,7,2,'2022-12-22'),
(N'LapTop acer-aspire-a31412','I7',28,           4421204,5421204,'LT_1.jpg',9,11,3,'2022-12-22'),
(N'LapTop acer-aspire-a71511','I5',22,           6477731,7477731,'LT_2.jpg',10,11,3,'2022-12-22'),
(N'LapTop asus-s510ua-i50','I3',30,              7542377,8542377,'LT_3.jpg',15,12,3,'2022-12-22'),
(N'LapTop asus-x44lua-i39','Full box',14,        8256867,9256867,'LT_4.jpg',17,12,3,'2022-12-22'),
(N'Máy ảnh Cannon EOS 6D8','Full box',5,         8396596,9396596,'Camera_1.jpg',12,1,4,'2022-12-22'),
(N'Máy ảnh Canon Ixus 1857','Full box',3,        1812596,2812596,'Camera_2.jpg',2,1,4,'2022-12-22'),
(N'Máy ảnh Canon EOS M506','Full box',19,        4217622,5217622,'Camera_3.jpg',3,1,4,'2022-12-22'),
(N'Máy ảnh Canon Ixus 2855','Full box',37,       9344565,10344565,'Camera_1.jpg',4,1,4,'2022-12-22'),
(N'Máy ảnh Canon Powershot4 ','Test',41,         5761988,6761988,'Camera_2.jpg',1,1,4,'2022-12-22'),
(N'cap-lightning-2m-evalu3','Test',47,           7613987,8613987,'SP_1.jpg',5,6,6,'2022-12-22'),
(N'cap-lightning-20cm-esaver2','Test',30,        7403373,8403373,'SP_2.jpg',1,5,6,'2022-12-22'),
(N'cap-micro-1m-esaver1','Test',44,              8930751,9930751,'SP_3.jpg',2,5,6,'2022-12-22'),
(N'cap-micro-usb-20cm1','Test',32,               3214440,4214440,'SP_4.jpg',3,5,6,'2022-12-22'),
(N'tai-nghe-chup-tai-kanen1','',27,              8870860,9870860,'SP_5.jpg',7,12,6,'2022-12-22');

insert into Chuong_Trinh_Khuyen_Mais(TenChuongTrinh,MoTa,FromDate,ToDate,created_at) values(N'Khuyến mãi cực hot ngày 20/11',N' giảm giá đến 5000đ các loại phụ kiện','2021-11-20','2022-12-01','2021-10-19');

insert into CT_Chuong_Trinh_KMs(ChuongTrinhKhuyenMaiId,SanPhamId,GiamGia,created_at) select a.Id,b.Id,5000,'2021-11-21' from Chuong_Trinh_Khuyen_Mais as a,San_Phams as b where b.LoaiSanPhamId=6 and a.Id=1;
insert into CT_Chuong_Trinh_KMs(ChuongTrinhKhuyenMaiId,SanPhamId,GiamGia,created_at) select a.Id,b.Id,10000,'2021-11-21' from Chuong_Trinh_Khuyen_Mais as a,San_Phams as b where b.LoaiSanPhamId=4 and a.Id=1;

insert into Don_Vi_Van_Chuyens(TenDonViVanChuyen,Website,Email,Phone)values
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

insert into Dia_Chis(KhachHangId,TenNguoiNhan,Phone,DiaChiChiTiet) select a.id,a.HoTen,a.Phone,a.DiaChi from khach_hangs as a;
insert into Dia_Chis(KhachHangId,TenNguoiNhan,Phone,TinhThanhPho,QuanHuyen,PhuongXa,DiaChiChiTiet,CodeTinhThanhPho,CodeQuanHuyen,CodePhuongXa)
values(1,'Dat ne`','091928739',N'Thành phố Hồ Chí Minh',N'Huyện Bình Chánh',N'Thị trấn Tân Túc',N'123/ds1 Duong ABCXYZ',79,785,27595);
insert into Dia_Chis(KhachHangId,TenNguoiNhan,Phone,TinhThanhPho,QuanHuyen,PhuongXa,DiaChiChiTiet,CodeTinhThanhPho,CodeQuanHuyen,CodePhuongXa)
values(2,'Dattt ne``','0901283123',N'Thành phố Hà Nội',N'Quận Long Biên',N'Phường Thượng Thanh',N'123/asasd Đường An Dương Vương',1,4,115);
insert into Dia_Chis(KhachHangId,TenNguoiNhan,Phone,TinhThanhPho,QuanHuyen,PhuongXa,DiaChiChiTiet,CodeTinhThanhPho,CodeQuanHuyen,CodePhuongXa)
values(3,'Dat ne`','091928739',N'Thành phố Hồ Chí Minh',N'Huyện Bình Chánh',N'Thị trấn Tân Túc',N'123/ds1 Duong ABCXYZ',79,785,27595);
insert into Dia_Chis(KhachHangId,TenNguoiNhan,Phone,TinhThanhPho,QuanHuyen,PhuongXa,DiaChiChiTiet,CodeTinhThanhPho,CodeQuanHuyen,CodePhuongXa)
values(4,'Dattt ne``','0901283123',N'Thành phố Hà Nội',N'Quận Long Biên',N'Phường Thượng Thanh',N'123/asasd Đường An Dương Vương',1,4,115);

insert into Hoa_Dons(PhuongThucThanhToan,DiaChiId,TrangThai,TongTien,created_at)
SELECT (SELECT FLOOR((RAND() * (5-1+1))+1)),b.id,(SELECT FLOOR((RAND() * (4-1+1))+1)),0,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP('2015-1-1') - UNIX_TIMESTAMP('2020-01-01')) + UNIX_TIMESTAMP('2020-01-01')))
FROM Dia_Chis as b,san_phams ORDER BY RAND() LIMIT 100;

insert into CT_Hoa_Dons(HoaDonId,SanPhamId,SoLuong,GiaGiam,ThanhTien,Star)
SELECT a.id,b.id,(SELECT FLOOR((RAND() * (5-1+1))+1)),0,0,(SELECT FLOOR((RAND() * (5-0+1))+0))
FROM hoa_dons as a,san_phams as b ORDER BY RAND() LIMIT 500;

insert into Gio_Hangs(KhachHangId,SanPhamId,SoLuong)
SELECT a.id,b.id,(SELECT FLOOR((RAND() * (5-1+1))+1))
FROM khach_hangs as a,san_phams as b ORDER BY RAND() LIMIT 100;

insert into Yeu_Thichs(KhachHangId,SanPhamId)
SELECT a.id,b.id
FROM khach_hangs as a,san_phams as b ORDER BY RAND() LIMIT 50;

insert into Binh_Luans(NoiDung,KhachHangId,SanPhamId) values(N'Sản phẩm rất tốt triệu like',1,30);
insert into Binh_Luans(NoiDung,KhachHangId,SanPhamId) values(N'Sản phẩm tốt',1,28);
insert into Binh_Luans(NoiDung,KhachHangId,SanPhamId) values(N'giao hang nhanh, sản phẩm tốt',2,29);
insert into Binh_Luans(NoiDung,KhachHangId,SanPhamId) values(N'hoàn hảo',1,32);

insert into Lich_Su_Van_Chuyens(HoaDonId,NguoiVanChuyenId,TrangThai,created_at)
SELECT a.Id,b.Id,0,(SELECT FROM_UNIXTIME(RAND() * (UNIX_TIMESTAMP() - UNIX_TIMESTAMP('2021-01-01')) + UNIX_TIMESTAMP('2021-01-01')))
FROM (select * from hoa_dons where hoa_dons.TrangThai=3 or hoa_dons.TrangThai=4) as a,Nguoi_Van_Chuyens as b ORDER BY RAND() LIMIT 200;

insert into conversations(NhanVienId,KhachHangId,created_at) select 1,a.id,current_timestamp() from khach_hangs as a;
insert into messages(Body,KhachHangId,ConversationId,created_at) values(N'Hello Admin',2,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-1');
insert into messages(Body,KhachHangId,ConversationId,created_at) values(N'Mon nay` ban nhu nao`?',2,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-3');
insert into messages(Body,KhachHangId,ConversationId,created_at) values(N'Gia bao nhieu',2,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-5');
insert into messages(Body,KhachHangId,ConversationId,created_at) values(N'200k ban ko',2,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-8');
insert into messages(Body,KhachHangId,ConversationId,created_at) values(N'abcxyz thoi ko mua nua',2,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-9');

insert into messages(Body,NhanVienId,ConversationId,created_at) values(N'Hello khach',1,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-2');
insert into messages(Body,NhanVienId,ConversationId,created_at) values(N'Mon nay sieu re~',1,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-4');
insert into messages(Body,NhanVienId,ConversationId,created_at) values(N'mua di mua di',1,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-6');
insert into messages(Body,NhanVienId,ConversationId,created_at) values(N'ban voi gia sale mua di dung ngai',1,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-7');
insert into messages(Body,NhanVienId,ConversationId,created_at) values(N'khong mua t chem',1,(select id from conversations where KhachHangId=2 and NhanVienId=1),'2021-1-10');

update Lich_Su_Van_Chuyens a, (select * from hoa_dons where TrangThai=4) b
set a.TrangThai=1
where a.id=(select id from lich_su_van_chuyens where HoaDonId=b.id ORDER BY created_at DESC LIMIT 1);

update CT_Hoa_Dons
set GiaNhap=(select GiaNhap from San_Phams where Id=SanPhamId),
    GiaBan=(select GiaBan from San_Phams where Id=SanPhamId);

update CT_Hoa_Dons a, (select a.id,b.GiamGia from san_phams as a,ct_chuong_trinh_kms as b WHERE a.id=b.SanPhamId) b
set a.GiaBan=a.GiaBan-b.GiamGia
where a.SanPhamId=b.id;

update CT_Hoa_Dons
set ThanhTien=(SoLuong*GiaBan)-GiaGiam;

update hoa_dons a, (select HoaDonId,SUM(ThanhTien) as tongTien,SUM(SoLuong) as tongSoLuong from ct_hoa_dons GROUP BY HoaDonId) b
set a.TongTien=b.tongTien,a.TongSoLuong=b.tongSoLuong
where a.id=b.HoaDonId;

update san_phams
set GiaNhap=(SELECT FLOOR((RAND() * (15-3+1))+3)*1000000),
	GiaBan=GiaNhap+1000000;

update san_phams
set GiaNhap=(SELECT FLOOR((RAND() * (15-3+1))+3)*10000),
	GiaBan=GiaNhap+10000
where LoaiSanPhamId=6;
