﻿insert into Quyens(TenQuyen,Mota) values('DangNhap',N'Đăng Nhập')			  ;
insert into Quyens(TenQuyen,Mota) values('DangKy',N'Đăng ký')				  ;
insert into Quyens(TenQuyen,Mota) values('QLyDonHang',N'Quản lý đơn hàng')	  ;
insert into Quyens(TenQuyen,Mota) values('QLyKhachHang',N'Quản lý khách hàng');
insert into Quyens(TenQuyen,Mota) values('QLyQuyen',N'Quản lý quyền')		  ;
insert into Quyens(TenQuyen,Mota) values('QLySanPham',N'Quản lý sản phẩm')	  ;
insert into Quyens(TenQuyen,Mota) values('QLyNhanSu',N'Quản lý nhân viên')	  ;
insert into Quyens(TenQuyen,Mota) values('QLyKho',N'Quản lý nhân viên')		  ;

insert into LoaiTaiKhoans(TenLoai,Mota) values('Admin',N'Admin')			;
insert into LoaiTaiKhoans(TenLoai,Mota) values('NhanVien',N'Nhân viên')		;
insert into LoaiTaiKhoans(TenLoai,Mota) values('Khach',N'loại khách Thường');
insert into LoaiTaiKhoans(TenLoai,Mota) values('Vip',N'Vip pro')			;
insert into LoaiTaiKhoans(TenLoai,Mota) values('Kho',N'Quản lý kho')		;
insert into LoaiTaiKhoans(TenLoai,Mota) values('HR',N'Quản lý Nhân sự')		;

insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,1,N'Admin-DangNhap')		 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,2,N'Admin-DangKy')		 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,3,N'Admin-QuanLyDonHang')	 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,4,N'Admin-QuanLyKhachHang');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,5,N'Admin-QuanLyQuyen')	 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,6,N'Admin-QuanLySanPham')	 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,7,N'Admin-QuanLyNhanSu')	 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(1,8,N'Admin-QuanLyKho')		 ;
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(2,1,N'NhanVien-DangNhap');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(2,2,N'NhanVien-DangKy');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(2,4,N'NhanVien-QuanLyKhachHang');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(2,3,N'NhanVien-QuanLyDonHang');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(3,1,N'KhachThuong-DangNhap');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(3,2,N'KhachThuong-DangKy');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(3,3,N'KhachThuong-QuanLyDonHang');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(5,1,N'QuanLyKho-DangNhap');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(5,8,N'QuanLyKho-QuanLyKho');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(6,1,N'HR-DangNhap');
insert into LoaiTaiKhoan_Quyens(LoaiTaiKhoanId,QuyenId,Mota) values(6,7,N'HR-QuanLyNhanSu');

insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Admin','Admin@gmail.com','0779597983','Admin',1,'2021-11-11')					;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('NhanVien01','NhanVien01@gmail.com','0238506390','passwordNV01',2,'2007-10-13')	;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('NhanVien02','NhanVien02@gmail.com','0176440449','passwordNV02',2,'1988-08-22')	;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('NhanVien03','NhanVien03@gmail.com','0300345555','passwordNV03',2,'1987-09-18')	;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Khach01','Khach01@gmail.com','0618431768','passwordKH01',3,'1985-03-25')			;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Khach02','Khach02@gmail.com','0452803292','passwordKH02',3,'2015-07-09')			;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Khach03','Khach03@gmail.com','0566425150','passwordKH03',3,'1991-11-24')			;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Khach04','Khach04@gmail.com','0982099712','passwordKH04',3,'2014-10-27')			;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('Khach05','Khach05@gmail.com','0333641834','passwordKH05',3,'2010-10-26')			;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('KhachVip01','KhachVip01@gmail.com','0646538241','passwordKHVip01',4,'2015-06-10');
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('KhachVip02','KhachVip02@gmail.com','0607898304','passwordKHVip02',4,'1983-04-16') ;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('QLKho01','QLKho01@gmail.com','0982108868','passwordQLKho01',5,'2007-10-18')		 ;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('QLKho02','QLKho02@gmail.com','0848392561','passwordQLKho02',5,'1976-02-01')		 ;
insert into TaiKhoans(Username,Email,Phone,MatKhau,LoaiTaiKhoanId,NgayTao) values('QLNhanSu01','QLNhanSu01@gmail.com','0953686248','passwordQLNhanSu01',6,'2009-04-08');

insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Administrator','2007/02/14',1,N'TP HCM',null,1,'1991-11-11',0)							 ;
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Bà Huyện Thanh Quan','1997/04/14',0,N'O7, Cao Bá Nhạ, Hậu Giang',null,2,'1991-11-11',0);
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Nguyễn Hữu Cảnh','2002/11/12',0,N'P7, Đồng Khởi, Lào Cai',null,2,'1991-11-11',0)		;
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Alexandre de Rhodes','2020/08/03',0,N'B0, Lê Lai, Thái Bình',null,2,'1991-11-11',0)	;
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Nguyễn Du','1976/09/07',1,N'D9, Nguyễn Phi Khanh, Thái Bình',null,5,'1991-11-11',0)	;
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Cao Thắng','1987/02/02',1,N'O6, Alexandre de Rhodes, Hậu Giang',null,5,'1991-11-11',0)	;
insert into NhanViens(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao,Luong) values (N'Chu Du','1992/12/07',1,N'B3, Trịnh Như Khuê, Hậu Giang',null,6,'1991-11-11',0);

insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Hồ Huấn Nghiệp','1990/11/24',0,N'J5, Nguyễn Hữu Cầu, Thanh Hóa',null,3,'1991-11-11');
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Hàm Nghi','1996/10/15',0,N'D4, Huỳnh Khương Ninh, Tiền Giang',null,3,'1991-11-11')	;
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Hồ Tùng Mậu','1986/04/09',0,N'P1, Bùi Viện, Hải Phòng',null,3,'1991-11-11')			;
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Nguyễn Cư Trinh','1994/08/27',1,N'W7, Mai Thị Lựu, Trà Vinh',null,3,'1991-11-11')	;
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Bùi Viện','1990/09/06',1,N'D3, Nam Quốc Cang, Bình Định',null,3,'1991-11-11')		;
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Lý Tự Trọng','1995/01/12',1,N'V6, Chu Mạnh Trinh, Tuyên Quang',null,4,'1991-11-11')	;
insert into KhachHangs(HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,TaiKhoanId,NgayTao) values (N'Lý Văn Phức','1987/09/17',0,N'F7, Nguyễn Huệ, Kon Tum',null,4,'1991-11-11')			;

insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('Cannon','V2, Lê Thị Riêng, Hà Nam','Cannon@gmail.com','0468343337')				;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('IPhone','N3, Hoàng Sa, Tây Ninh','IPhone@gmail.com','0868562476')					;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('Xiaomi','Z7, Lê Thánh Tôn, Lào Cai','Xiaomi@gmail.com','0727834458')				;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('SaNaKy','E4, Lê Anh Xuân, Phú Yên','SaNaKy@gmail.com','0219680334')				;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('SONY','V2, Lê Thị Riêng, Hà Nam','SONY@gmail.com','0124108053')					;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('SamSung','M8, Nguyễn Cư Trinh, Lai Châu','SamSung@gmail.com','0487862068')		;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('ViVo','R1, Lê Công Kiều, Hải Phòng','ViVo@gmail.com','0912247804')				;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('Electrolux','F3, Nguyễn Cảnh Chân, Khánh Hòa','Electrolux@gmail.com','0316892771');
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('LG','N1, Nam Quốc Cang, Nam Định','LG@gmail.com','0233681010')					;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('Toshiba','J4, Calmette, Hà Nam','Toshiba@gmail.com','0268628820')					;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('Acer','F9, Nguyễn Hữu Cầu, Cao Bằng','Acer@gmail.com','0883771752')				;
insert into NhaCungCaps(TenNhaCungCap,DiaChi,Email,Phone) values('ASUS','H6, Huỳnh Khương Ninh, Hà Tĩnh','ASUS@gmail.com','0135349672')				;

insert into LoaiSanPhams(TenLoai,MoTa) values(N'Điện lạnh',null);
insert into LoaiSanPhams(TenLoai,MoTa) values(N'Điện thoại','Smart Phone');
insert into LoaiSanPhams(TenLoai,MoTa) values(N'LapTop',null)			  ;
insert into LoaiSanPhams(TenLoai,MoTa) values(N'Máy ảnh',null)			  ;
insert into LoaiSanPhams(TenLoai,MoTa) values(N'Máy tính bảng',null)	  ;
insert into LoaiSanPhams(TenLoai,MoTa) values(N'Phụ kiện',null)			  ;

insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Xiaomi Redmi Note 6 Pro','64GB',10,1000000,'DT_1.jpg',12,2,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy giặt Electrolux 10 Kg','2 Năm',4,5376969,'DL_1.jpg',3,8,1,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy giặt Beko 9Kg','2 Năm',8,2560459,'DL_2.jpg',5,8,1,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Samsung Inverter 12','2 Năm',46,9208494,'DT_2.jpg',9,6,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy giặt Toshiba 9.5 Kg','32Gb',10,8996345,'DL_3.jpg',1,10,1,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a1','1 Năm FullBox',39,5139972,'DT_3.jpg',0,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a2','16Gb',5,1367603,'DT_4.jpg',2,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Đt xiaomi-redmi-5-plus','32Gb',6,8322064,'DT_5.jpg',3,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a1','1 Năm FullBox',17,5817358,'DT_6.jpg',7,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a2','16Gb',33,2647340,'DT_7.jpg',8,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Đt xiaomi-redmi-5-plus','32Gb',2,2299870,'DT_8.jpg',90,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a1','1 Năm FullBox',24,2674972,'DT_9.jpg',4,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại xiaomi-mi-a2','16Gb',48,6927375,'DT_10.jpg',1,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Đt xiaomi-redmi-5-plus','1 Năm FullBox',19,8344018,'DT_11.jpg',2,3,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'samsung-galaxy-tab-e-96','1 Năm FullBox',25,5775860,'DT_12.jpg',3,6,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'samsung-galaxy-tab-e-96','1 Năm FullBox',23,5175337,'DT_13.jpg',7,6,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'samsung-galaxy-tab-e-96','1 Năm FullBox',39,3102066,'DT_14.jpg',5,6,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Điện thoại vivo-y85-red','I3',43,7205830,'DT_15.jpg',4,7,2,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'LapTop acer-aspire-a314','I7',28,4421204,'LT_1.jpg',9,11,3,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'LapTop acer-aspire-a715','I5',22,6477731,'LT_2.jpg',10,11,3,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'LapTop asus-s510ua-i5','I3',30,7542377,'LT_3.jpg',15,12,3,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'LapTop asus-x44lua-i3','Full box',14,8256867,'LT_4.jpg',17,12,3,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy ảnh Cannon EOS 6D','Full box',5,8396596,'Camera_1.jpg',12,1,4,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy ảnh Canon Ixus 185','Full box',3,1812596,'Camera_2.jpg',2,1,4,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy ảnh Canon EOS M50','Full box',19,4217622,'Camera_3.jpg',3,1,4,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy ảnh Canon Ixus 285','Full box',37,9344565,'Camera_1.jpg',4,1,4,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'Máy ảnh Canon Powershot ','Test',41,5761988,'Camera_2.jpg',1,1,4,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'cap-lightning-2m-evalu','Test',47,7613987,'SP_1.jpg',5,6,6,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'cap-lightning-20cm-esaver','Test',30,7403373,'SP_2.jpg',1,5,6,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'cap-micro-1m-esaver','Test',44,8930751,'SP_3.jpg',2,5,6,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'cap-micro-usb-20cm','Test',32,3214440,'SP_4.jpg',3,5,6,'2022-12-22');
insert into SanPhams(TenSanPham,MoTa,SoLuongTon,DonGia,HinhAnh,LuotMua,NhaCungCapId,LoaiSanPhamId,NgayNhap)
values(N'tai-nghe-chup-tai-kanen','',27,8870860,'SP_5.jpg',7,12,6,'2022-12-22');

insert into ChuongTrinhKhuyenMais(TenChuongTrinh,MoTa,FormDate,ToDate,NhanVienId,NgayTao) values(N'Khuyến mãi cực hot ngày 20/11',N' giảm giá đến 5000đ các loại phụ kiện','2021-11-20','2021-12-01',1,'2021-10-19');

insert into CT_ChuongTrinhKMs(ChuongTrinhKhuyenMaiId,SanPhamId,GiamGia,NgayTao) select a.Id,b.Id,5000,'2021-11-21' from ChuongTrinhKhuyenMais as a,SanPhams as b where b.LoaiSanPhamId=6 and a.Id=1;

insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Viettel Post','https://www.viettelpost.com.vn/','viettelpost@gmail.com','84462660306')	   ;
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Vietnam Post','https://www.ems.com.vn/','Vietnampost@gmail.com','84435371552')			   ;
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Giao Hàng Nhanh','https://giaohangnhanh.vn/','giaohangnhanh@gmail.com','18001201')		   ;
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Giao Hàng Tiết Kiệm','https://giaohangtietkiem.vn/','giaohangtietkiem@gmail.com','19006092');
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Kerry Express','https://kerryexpress.com.vn/','kerryexpress@gmail.com','19006663')		   ;
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'SShip','https://sship.vn/','sship@gmail.com','1900969684')								   ;
insert into DonViVanChuyens(TenDonViVanChuyen,Website,Email,Phone)values(N'Shipchung','https://www.shipchung.vn/','shipchung@gmail.com','1900636030')				   ;

insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0484658492',1,N'Nguyễn Huy Tự','1979-12-03',1,null,null,'2021-11-21');
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0927281266',2,N'Cô Bắc','1981-04-07',0,null,null,'2021-11-21')		;
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0325167511',3,N'Mạc Thị Bưởi','1998-07-05',1,null,null,'2021-11-21')	;
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0204082858',4,N'Lê Công Kiều','2001-11-09',1,null,null,'2021-11-21')	;
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0506788273',5,N'Hồ Hảo Hớn','1985-12-02',1,null,null,'2021-11-21')	;
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0506781231',6,N'Trần Phi Long','1997-06-12',0,null,null,'2021-11-21');
insert into NguoiVanChuyens(Phone,DonViVanChuyenId,HoTen,NgaySinh,GioiTinh,DiaChi,HinhAnh,NgayTao) values('0298123123',7,N'Dương Tấn Tài','1989-08-29',1,null,null,'2021-11-21');

insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'ChuaThanhToan','Đơn chưa thanh toán');
insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'DaThanhToan','Đơn đã thanh toán')	  ;
insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'DaGiao','Đơn đã giao')				  ;
insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'DaHuy','Đơn đã được hủy')			  ;
insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'DangXuLy','Đơn đang xử lý')		  ;
insert into TrangThaiHDs(TenTrangThai,MoTa) values(N'DangVanChuyen','Đơn đang vận chuyển');

insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,5,null,4,'2021/03/29',1,0,'2021/01/27');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(5,4,null,5,'2021/03/14',2,0,'2021/01/15');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(6,5,null,6,'2021/01/13',3,0,'2021/01/11');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(6,5,null,3,'2021/03/28',4,0,'2021/03/30');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(3,5,null,1,'2021/02/23',5,0,'2021/03/30');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,7,null,1,'2021/02/27',6,0,'2021/04/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,4,null,5,'2021/03/17',7,0,'2021/04/07');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,4,null,1,'2021/04/10',1,0,'2021/01/11');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(2,3,null,3,'2021/04/20',2,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,4,null,4,'2021/03/07',3,0,'2021/04/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,3,null,6,'2021/01/24',4,0,'2021/01/11');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,4,null,6,'2021/01/23',5,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,3,null,4,'2021/02/15',6,0,'2021/01/27');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(7,2,null,3,'2021/02/28',7,0,'2021/01/15');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(6,2,null,1,'2021/02/18',1,0,'2021/01/15');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,3,null,4,'2021/02/25',2,0,'2021/03/30');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,7,null,6,'2021/01/04',3,0,'2021/01/27');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(3,6,null,6,'2021/03/28',4,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,6,null,6,'2021/02/13',5,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(2,4,null,2,'2021/01/26',6,0,'2021/04/07');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,7,null,3,'2021/04/24',7,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,4,null,1,'2021/01/09',1,0,'2021/04/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(7,5,null,4,'2021/01/23',2,0,'2021/01/27');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(5,4,null,2,'2021/03/04',3,0,'2021/01/27');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(7,1,null,2,'2021/04/10',4,0,'2021/04/28');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,6,null,2,'2021/03/15',5,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,5,null,2,'2021/01/31',6,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(3,6,null,3,'2021/01/29',7,0,'2021/01/15');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(4,2,null,3,'2021/01/19',1,0,'2021/01/29');
insert into HoaDons(NhanVienId,KhachHangId,DiaChiGiao,TrangThaiHDId,NgayGiao,NguoiVanChuyenId,TongTien,NgayLapHD) values(1,7,null,4,'2021/03/14',2,0,'2021/01/15');

insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(19,30,15,15000000) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(18,11,17,91408473) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(6,12,5,12802295)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(17,32,3,27625482)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(8,13,1,8996345)	   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(4,26,2,10279944)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(12,20,7,9573221)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(6,18,9,74898576)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(21,29,9,52356222)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(8,17,12,31768080)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(23,19,1,2299870)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(15,7,9,24074748)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(2,17,3,20782125)   ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(29,17,14,116816252);
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(7,31,10,57758600) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(9,10,6,31052022)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(12,18,5,15510330) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(22,28,11,79264130);
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(28,30,2,8842408)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(14,13,5,32388655) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(1,11,6,45254262)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(28,10,6,49541202) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(3,10,10,83965960) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(6,20,18,32626728) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(17,4,16,67481952) ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(2,14,20,186891300);
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(8,12,8,46095904)  ;
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(28,3,15,114209805);
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(23,14,11,81437103);
insert into CT_HoaDons(HoaDonId,SanPhamId,SoLuong,ThanhTien) values(18,4,12,107169012);
