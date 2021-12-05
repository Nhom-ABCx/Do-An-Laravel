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
        Schema::create('quyens', function (Blueprint $table) {
            $table->Id();
            $table->string('TenQuyen');
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('loai_tai_khoans', function (Blueprint $table) {
            $table->Id();
            $table->string('TenLoai');
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('loai_tai_khoan_quyens', function (Blueprint $table) {
            $table->foreignId('LoaiTaiKhoanId');
            $table->foreignId('QuyenId');
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('LoaiTaiKhoanId')->references('Id')->on('loai_tai_khoans');
            $table->foreign('QuyenId')->references('Id')->on('quyens');
        });
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->Id();
            $table->string('Username');
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->string('MatKhau');
            $table->foreignId('LoaiTaiKhoanId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('LoaiTaiKhoanId')->references('Id')->on('loai_tai_khoans');
        });
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->Id();
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->double('Luong');
            $table->foreignId('TaiKhoanId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('Id')->on('tai_khoans');
        });
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->Id();
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->foreignId('TaiKhoanId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('TaiKhoanId')->references('Id')->on('tai_khoans');
        });
        Schema::create('nha_cung_caps', function (Blueprint $table) {
            $table->Id();
            $table->string('TenNhaCungCap');
            $table->string('DiaChi')->nullable();
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('loai_san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenLoai');
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenSanPham');
            $table->string('MoTa')->nullable();
            $table->integer('SoLuongTon');
            $table->double('DonGia');
            $table->string('HinhAnh')->nullable();
            $table->integer('LuotMua');
            $table->foreignId('NhaCungCapId');
            $table->foreignId('LoaiSanPhamId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('NhaCungCapId')->references('Id')->on('nha_cung_caps');
            $table->foreign('LoaiSanPhamId')->references('Id')->on('loai_san_phams');
        });
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->Id();
            $table->string('NoiDung');
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
            $table->foreign('SanPhamId')->references('Id')->on('san_phams');
        });
        Schema::create('chuong_trinh_khuyen_mais', function (Blueprint $table) {
            $table->Id();
            $table->string('TenChuongTrinh');
            $table->string('MoTa')->nullable();
            $table->dateTime('FromDate');
            $table->dateTime('ToDate');
            $table->foreignId('NhanVienId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('NhanVienId')->references('Id')->on('nhan_viens');
        });
        Schema::create('ct_chuong_trinh_kms', function (Blueprint $table) {
            $table->foreignId('ChuongTrinhKhuyenMaiId');
            $table->foreignId('SanPhamId');
            $table->double('GiamGia');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('ChuongTrinhKhuyenMaiId')->references('Id')->on('chuong_trinh_khuyen_mais');
            $table->foreign('SanPhamId')->references('Id')->on('san_phams');
        });
        Schema::create('don_vi_van_chuyens', function (Blueprint $table) {
            $table->Id();
            $table->string('TenDonViVanChuyen');
            $table->string('Website')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
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
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('DonViVanChuyenId')->references('Id')->on('don_vi_van_chuyens');
        });
        Schema::create('trang_thai_hds', function (Blueprint $table) {
            $table->Id();
            $table->string('TenTrangThai');
            $table->string('MoTa')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('NhanVienId');
            $table->foreignId('KhachHangId');
            $table->string('DiaChiGiao')->nullable();
            $table->foreignId('TrangThaiHDId');
            $table->dateTime('NgayGiao');
            $table->foreignId('NguoiVanChuyenId');
            $table->double('TongTien');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('NhanVienId')->references('Id')->on('nhan_viens');
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
            $table->foreign('TrangThaiHDId')->references('Id')->on('trang_thai_hds');
            $table->foreign('NguoiVanChuyenId')->references('Id')->on('nguoi_van_chuyens');
        });
        Schema::create('ct_hoa_dons', function (Blueprint $table) {
            $table->foreignId('HoaDonId');
            $table->foreignId('SanPhamId');
            $table->integer('SoLuong');
            $table->double('ThanhTien');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('HoaDonId')->references('Id')->on('hoa_dons');
            $table->foreign('SanPhamId')->references('Id')->on('san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyens');
        Schema::dropIfExists('loai_tai_khoans');
        Schema::dropIfExists('loai_tai_khoan_quyens');
        Schema::dropIfExists('tai_khoans');
        Schema::dropIfExists('nhan_viens');
        Schema::dropIfExists('khach_hangs');
        Schema::dropIfExists('nha_cung_caps');
        Schema::dropIfExists('loai_san_phams');
        Schema::dropIfExists('san_phams');
        Schema::dropIfExists('binh_luans');
        Schema::dropIfExists('trang_thai_hds');
        Schema::dropIfExists('hoa_dons');
        Schema::dropIfExists('ct_hoa_dons');
        Schema::dropIfExists('don_vi_van_chuyens');
        Schema::dropIfExists('nguoi_van_chuyens');
        Schema::dropIfExists('chuong_trinh_khuyen_mais');
        Schema::dropIfExists('ct_chuongtrinh_kms');
    }
}
