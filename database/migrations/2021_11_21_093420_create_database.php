<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\TrangThaiHD;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
        Schema::create('quyens', function (Blueprint $table) {
            $table->id();
            $table->string('Key');
            $table->string('TenQuyen');
            $table->integer('Parent_Id')->nullable(); //xai` de quy
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('loai_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('TenLoai');
            $table->string('MoTa');
            $table->timestamps();
        });
        Schema::create('loai_tai_khoan_quyens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('LoaiTaiKhoanId');
            $table->foreignId('QuyenId');
            $table->string('MoTa');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('LoaiTaiKhoanId')->references('id')->on('loai_tai_khoans');
            $table->foreign('QuyenId')->references('id')->on('quyens');
        });
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->Id();
            $table->string('Username')->unique();
            $table->string('Email')->unique();
            $table->string('Phone')->nullable();
            $table->string('MatKhau');
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->foreignId('LoaiTaiKhoanId');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('LoaiTaiKhoanId')->references('id')->on('loai_tai_khoans');
        });
        Schema::create('hang_san_xuats', function (Blueprint $table) {
            $table->Id();
            $table->string('TenHangSanXuat')->unique();
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->id();
            $table->string('TenNhaCungCap')->unique();
            $table->string('DiaChi')->nullable();
            $table->string('Email')->unique();
            $table->string('Phone')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('loai_san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenLoai')->unique();
            $table->string('MoTa')->nullable();
            $table->integer('Parent_Id')->nullable(); //xai` de quy
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenSanPham')->unique();
            $table->longText('MoTa')->nullable();
            $table->integer('LuotMua');
            $table->foreignId('HangSanXuatId');
            $table->foreignId('LoaiSanPhamId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HangSanXuatId')->references('id')->on('hang_san_xuats');
            $table->foreign('LoaiSanPhamId')->references('id')->on('loai_san_phams');
        });
        Schema::create('thuoc_tinhs', function (Blueprint $table) {
            $table->id();
            $table->string('TenThuocTinh')->unique();
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('thuoc_tinh_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ThuocTinhId');
            $table->string('Value')->unique();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('ThuocTinhId')->references('id')->on('thuoc_tinhs');
        });
        Schema::create('ct_san_phams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('SanPhamId');
            $table->string('MaSanPham')->unique();
            $table->double('GiaBan')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
        });
        Schema::create('ct_san_pham_values', function (Blueprint $table) {
            $table->foreignId('SanPhamId');
            $table->foreignId('CTSanPhamId');
            $table->foreignId('ThuocTinhId');
            $table->foreignId('ThuocTinhValueId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
            $table->foreign('ThuocTinhId')->references('id')->on('thuoc_tinhs');
            $table->foreign('ThuocTinhValueId')->references('id')->on('thuoc_tinh_values');
            $table->primary(['SanPhamId', 'CTSanPhamId', 'ThuocTinhId']);
        });
        //Iphone 13 pro max Ram (8-16-32)  MauSac (Black-Yellow)
        //id: 1  SanPhamId: 1  ThuocTinhValueId: 1
        //id: 2  SanPhamId: 1  ThuocTinhValueId: 2
        //id: 3  SanPhamId: 1  ThuocTinhValueId: 3
        //id: 4  SanPhamId: 1  ThuocTinhValueId: 6
        //id: 5  SanPhamId: 1  ThuocTinhValueId: 7
        //id: 6  SanPhamId: 1  ThuocTinhValueId: 8
        //id: 7  SanPhamId: 1  ThuocTinhValueId: 9
        Schema::create('khos', function (Blueprint $table) {
            $table->id();
            $table->string('TenKho')->unique();
            $table->string('DiaChi');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('ct_khos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('KhoId');
            $table->foreignId('CTSanPhamId');
            $table->integer('SoLuong');
            $table->double('GiaNhap');
            $table->double('TongTien');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('KhoId')->references('id')->on('khos');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('hinh_anhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('CTSanPhamId');
            $table->string('HinhAnh')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->Id();
            $table->string('NoiDung');
            $table->foreignId('TaiKhoanId');
            $table->foreignId('CTSanPhamId');
            $table->integer('Parent_Id')->nullable(); //xai` de quy
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('chuong_trinh_khuyen_mais', function (Blueprint $table) {
            $table->Id();
            $table->string('TenChuongTrinh')->unique();
            $table->string('MoTa')->nullable();
            $table->dateTime('FromDate');
            $table->dateTime('ToDate');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('ct_chuong_trinh_kms', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('ChuongTrinhKhuyenMaiId');
            $table->foreignId('CTSanPhamId');
            $table->double('GiamGia');
            $table->integer('SoLuong');
            $table->integer('SLDaSuDung');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('ChuongTrinhKhuyenMaiId')->references('id')->on('chuong_trinh_khuyen_mais');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('don_vi_van_chuyens', function (Blueprint $table) {
            $table->Id();
            $table->string('TenDonViVanChuyen')->unique();
            $table->string('Website')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('nguoi_van_chuyens', function (Blueprint $table) {
            $table->Id();
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->string('Phone')->nullable();
            $table->foreignId('DonViVanChuyenId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('DonViVanChuyenId')->references('id')->on('don_vi_van_chuyens');
        });
        Schema::create('dia_chis', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('TaiKhoanId');
            $table->string('TenNguoiNhan');
            $table->string('Phone');
            $table->string('DiaChiChiTiet');
            $table->string('PhuongXa')->nullable();
            $table->string('QuanHuyen')->nullable();
            $table->string('TinhThanhPho')->nullable();
            $table->integer('CodePhuongXa')->nullable();
            $table->integer('CodeQuanHuyen')->nullable();
            $table->integer('CodeTinhThanhPho')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
        });
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('DiaChiId');
            $table->tinyInteger('PhuongThucThanhToan');
            $table->integer("TongSoLuong");
            $table->double('TongTien');
            //https://viblo.asia/p/tim-hieu-va-su-dung-enum-trong-laravel-vyDZOYVk5wj
            $table->enum('TrangThai', TrangThaiHD::getValues())->default(TrangThaiHD::DangXacNhan);
            //$table->tinyInteger('TrangThai')->default(0);
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('DiaChiId')->references('id')->on('dia_chis');
        });
        Schema::create('ct_hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('HoaDonId');
            $table->foreignId('CTSanPhamId');
            $table->integer('SoLuong');
            $table->double('GiaNhap');
            $table->double('GiaBan');
            $table->double('GiaGiam')->nullable();
            $table->double('ThanhTien');
            $table->tinyInteger('Star')->default(0);
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HoaDonId')->references('id')->on('hoa_dons');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('yeu_thichs', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('TaiKhoanId');
            $table->foreignId('CTSanPhamId');
            $table->timestamps();
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
            $table->unique(['TaiKhoanId', 'CTSanPhamId']);
        });
        Schema::create('lich_su_van_chuyens', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('HoaDonId');
            $table->foreignId('NguoiVanChuyenId');
            $table->string('MoTa');
            $table->boolean('TrangThai')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HoaDonId')->references('id')->on('hoa_dons');
            $table->foreign('NguoiVanChuyenId')->references('id')->on('nguoi_van_chuyens');
        });
        Schema::create('gio_hangs', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('TaiKhoanId');
            $table->foreignId('CTSanPhamId');
            $table->integer('SoLuong');
            $table->timestamps();
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
            $table->unique(['TaiKhoanId', 'CTSanPhamId']);
        });
        //cuoc tro chuyen/hoi thoai
        Schema::create('chats', function (Blueprint $table) {
            $table->Id();
            $table->string('TenChat');
            $table->string('HinhAnh')->nullable();
            $table->foreignId('TaiKhoanId1');
            $table->foreignId('TaiKhoanId2');
            $table->timestamps();
            $table->foreign('TaiKhoanId1')->references('id')->on('tai_khoans');
            $table->foreign('TaiKhoanId2')->references('id')->on('tai_khoans');
        });
        //tin nhan'
        Schema::create('messages', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('ChatId'); //cuoc tro` chuyen nao`
            $table->foreignId('TaiKhoanId'); //ai la` ng` gui?
            $table->text('Body');
            $table->timestamps();
            $table->foreign('ChatId')->references('id')->on('chats');
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
        });
        Schema::create('hoa_don_nhaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('TaiKhoanId'); //nhập bởi ai
            $table->foreignId('NhaCungCapId'); // ai là người cung cấp
            $table->integer('TongSoLuong')->nullable();
            $table->double('TongTien')->nullable();
            $table->boolean('TrangThai')->default(false);
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
            $table->foreign('NhaCungCapId')->references('id')->on('nha_cung_caps');
        });
        Schema::create('ct_hoa_don_nhaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('HoaDonNhapId'); //được nhập từ hóa đơn nào
            $table->foreignId('CTSanPhamId'); //nhập sản phẩm nào
            $table->integer('SoLuong')->default(0);
            $table->double('GiaNhap')->default(0); //giá nhập vào bao nhiêu
            $table->double('ThanhTien')->default(0);
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HoaDonNhapId')->references('id')->on('hoa_don_nhaps');
            $table->foreign('CTSanPhamId')->references('id')->on('ct_san_phams');
        });
        Schema::create('lich_su_tim_kiems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('TaiKhoanId');
            $table->string('TimKiem');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
        });
        Schema::create('slide_shows', function (Blueprint $table) {
            $table->id();
            $table->string('HinhAnh')->nullable();
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('Code');
            $table->double('GiamGia');
            $table->dateTime('FromDate');
            $table->dateTime('ToDate');
            $table->integer('SoLuong');
            $table->integer('SLDaSuDung');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('voucher_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('TaiKhoanId');
            $table->foreignId('VoucherId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
            $table->foreign('VoucherId')->references('id')->on('vouchers');
        });
        Schema::create('lich_su_hoat_dongs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('TaiKhoanId');
            $table->foreignId('QuyenId');
            $table->timestamps();
            $table->foreign('QuyenId')->references('id')->on('quyens');
        });
        Schema::create('social_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('TaiKhoanId');
            $table->enum('LoaiSocial', ['Google', 'Facebook', 'Github', 'Twitter', 'Instagram', 'Linkedln'])->default('Google');
            $table->string('TenHienThi');
            $table->string('HinhAnh');
            $table->string('Token');
            $table->timestamps();
            $table->foreign('TaiKhoanId')->references('id')->on('tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('quyens');
        Schema::dropIfExists('loai_tai_khoans');
        Schema::dropIfExists('loai_tai_khoan_quyens');
        Schema::dropIfExists('tai_khoans');
        Schema::dropIfExists('hang_san_xuats');
        Schema::dropIfExists('nha_cung_caps');
        Schema::dropIfExists('loai_san_phams');
        Schema::dropIfExists('san_phams');
        Schema::dropIfExists('thuoc_tinhs');
        Schema::dropIfExists('thuoc_tinh_values');
        Schema::dropIfExists('ct_san_phams');
        Schema::dropIfExists('ct_san_pham_values');
        Schema::dropIfExists('khos');
        Schema::dropIfExists('ct_khos');
        Schema::dropIfExists('hinh_anhs');
        Schema::dropIfExists('binh_luans');
        Schema::dropIfExists('chuong_trinh_khuyen_mais');
        Schema::dropIfExists('ct_chuongtrinh_kms');
        Schema::dropIfExists('don_vi_van_chuyens');
        Schema::dropIfExists('nguoi_van_chuyens');
        Schema::dropIfExists('dia_chis');
        Schema::dropIfExists('hoa_dons');
        Schema::dropIfExists('ct_hoa_dons');
        Schema::dropIfExists('yeu_thichs');
        Schema::dropIfExists('lich_su_van_chuyens');
        Schema::dropIfExists('gio_hangs');
        Schema::dropIfExists('chats');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('hoa_don_nhaps');
        Schema::dropIfExists('ct_hoa_don_nhaps');
        Schema::dropIfExists('lich_su_tim_kiems');
        Schema::dropIfExists('slide_shows');
        Schema::dropIfExists('vouchers');
        Schema::dropIfExists('voucher_tai_khoans');
        Schema::dropIfExists('lich_su_hoat_dongs');
        Schema::dropIfExists('social_logins');
    }
}
