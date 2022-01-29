<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
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
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('khach_hangs', function (Blueprint $table) {
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
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('hang_san_xuats', function (Blueprint $table) {
            $table->Id();
            $table->string('Ten')->unique();
            $table->string('DiaChi')->nullable();
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('loai_san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenLoai')->unique();
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
        });
        Schema::create('san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenSanPham')->unique();
            $table->string('MoTa')->nullable();
            $table->integer('SoLuongTon');
            $table->double('GiaNhap')->nullable();
            $table->double('GiaBan')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->integer('LuotMua');
            $table->foreignId('HangSanXuatId');
            $table->foreignId('LoaiSanPhamId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HangSanXuatId')->references('id')->on('hang_san_xuats');
            $table->foreign('LoaiSanPhamId')->references('id')->on('loai_san_phams');
        });
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->Id();
            $table->string('NoiDung');
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
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
            $table->foreignId('ChuongTrinhKhuyenMaiId');
            $table->foreignId('SanPhamId');
            $table->double('GiamGia');
            $table->double('SoLuong');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('ChuongTrinhKhuyenMaiId')->references('id')->on('chuong_trinh_khuyen_mais');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
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
            $table->foreignId('KhachHangId');
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
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
        });
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('DiaChiId');
            $table->tinyInteger('PhuongThucThanhToan');
            $table->integer("TongSoLuong");
            $table->double('TongTien');
            $table->tinyInteger('TrangThai');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('DiaChiId')->references('id')->on('dia_chis');
        });
        Schema::create('ct_hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('HoaDonId');
            $table->foreignId('SanPhamId');
            $table->integer('SoLuong');
            $table->double('GiaNhap');
            $table->double('GiaBan');
            $table->double('GiaGiam')->nullable();
            $table->double('ThanhTien');
            $table->tinyInteger('Star')->nullable();
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HoaDonId')->references('id')->on('hoa_dons');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
        });
        Schema::create('yeu_thichs', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->timestamps();
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
            $table->unique(['KhachHangId', 'SanPhamId']);
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
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->integer('SoLuong');
            $table->timestamps();
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
            $table->unique(['KhachHangId', 'SanPhamId']);
        });
        //cuoc tro chuyen/hoi thoai
        Schema::create('conversations', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('NhanVienId');
            $table->foreignId('KhachHangId');
            $table->timestamps();
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
            $table->foreign('NhanVienId')->references('id')->on('nhan_viens');
            $table->unique(['NhanVienId', 'KhachHangId']);
        });
        //tin nhan'
        Schema::create('messages', function (Blueprint $table) {
            $table->Id();
            $table->text('Body');
            $table->foreignId('NhanVienId')->nullable(); //1 trong 2
            $table->foreignId('KhachHangId')->nullable(); //1 trong 2
            $table->foreignId('ConversationId');
            $table->timestamps();
            $table->foreign('NhanVienId')->references('id')->on('nhan_viens');
            $table->foreign('KhachHangId')->references('id')->on('khach_hangs');
            $table->foreign('ConversationId')->references('id')->on('conversations');
        });
        Schema::create('hoa_don_nhaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('NhanVienId'); //nhập bởi ai
            $table->string('NhaCungCap'); // ai là người cung cấp (do ko có bảng nhà cung cấp nên ghi chuỗi)
            $table->string('Phone'); // thông tin liên lạc
            $table->integer('TongSoLuong')->nullable();
            $table->double('TongTien')->nullable();
            $table->boolean('TrangThai')->default(false);
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('NhanVienId')->references('id')->on('nhan_viens');
        });
        Schema::create('ct_hoa_don_nhaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('HoaDonNhapId'); //được nhập từ hóa đơn nào
            $table->foreignId('SanPhamId'); //nhập sản phẩm nào
            $table->integer('SoLuong');
            $table->double('GiaNhap'); //giá nhập vào bao nhiêu
            $table->double('ThanhTien');
            $table->timestamps();
            $table->softDeletes(); //nay la trang thai xoa
            $table->foreign('HoaDonNhapId')->references('id')->on('hoa_don_nhaps');
            $table->foreign('SanPhamId')->references('id')->on('san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_viens');
        Schema::dropIfExists('khach_hangs');
        Schema::dropIfExists('hang_san_xuats');
        Schema::dropIfExists('loai_san_phams');
        Schema::dropIfExists('san_phams');
        Schema::dropIfExists('binh_luans');
        Schema::dropIfExists('hoa_dons');
        Schema::dropIfExists('ct_hoa_dons');
        Schema::dropIfExists('don_vi_van_chuyens');
        Schema::dropIfExists('nguoi_van_chuyens');
        Schema::dropIfExists('chuong_trinh_khuyen_mais');
        Schema::dropIfExists('ct_chuongtrinh_kms');
        Schema::dropIfExists('yeu_thichs');
        Schema::dropIfExists('rep_binh_luans');
        Schema::dropIfExists('lich_su_van_chuyens');
        Schema::dropIfExists('gio_hangs');
        Schema::dropIfExists('dia_chis');
        Schema::dropIfExists('conversations');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('hoa_don_nhaps');
        Schema::dropIfExists('ct_hoa_don_nhaps');
    }
}
