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
            $table->string('Username');
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->string('MatKhau');
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->Id();
            $table->string('Username');
            $table->string('Email');
            $table->string('Phone')->nullable();
            $table->string('MatKhau');
            $table->string('HoTen');
            $table->dateTime('NgaySinh');
            $table->boolean('GioiTinh'); //1 nam 0 nu~
            $table->string('DiaChi')->nullable();
            $table->string('HinhAnh')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('hang_san_xuats', function (Blueprint $table) {
            $table->Id();
            $table->string('Ten');
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
            $table->double('GiaNhap');
            $table->double('GiaBan');
            $table->string('HinhAnh')->nullable();
            $table->integer('LuotMua');
            $table->foreignId('HangSanXuatId');
            $table->foreignId('LoaiSanPhamId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('HangSanXuatId')->references('Id')->on('hang_san_xuats');
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
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
        });
        Schema::create('ct_chuong_trinh_kms', function (Blueprint $table) {
            $table->foreignId('ChuongTrinhKhuyenMaiId');
            $table->foreignId('SanPhamId');
            $table->double('GiamGia');
            $table->double('SoLuong');
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
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('NhanVienId');
            $table->foreignId('KhachHangId');
            $table->string('DiaChiGiao')->nullable();
            $table->tinyInteger('TrangThai');
            $table->double('TongTien');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('NhanVienId')->references('Id')->on('nhan_viens');
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
        });
        Schema::create('ct_hoa_dons', function (Blueprint $table) {
            $table->foreignId('HoaDonId');
            $table->foreignId('SanPhamId');
            $table->integer('SoLuong');
            $table->double('GiaBan');
            $table->double('GiaGiam')->nullable();
            $table->double('ThanhTien');
            $table->tinyInteger	('Star');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('HoaDonId')->references('Id')->on('hoa_dons');
            $table->foreign('SanPhamId')->references('Id')->on('san_phams');
        });
        Schema::create('yeu_thichs', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
            $table->foreign('SanPhamId')->references('Id')->on('san_phams');
        });
        Schema::create('rep_binh_luans', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('BinhLuanId');
            $table->foreignId('KhachHangId')->nullable();
            $table->foreignId('NhanVienId')->nullable();
            $table->string('NoiDung');
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('BinhLuanId')->references('Id')->on('binh_luans');
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
            $table->foreign('NhanVienId')->references('Id')->on('nhan_viens');
        });
        Schema::create('lich_su_van_chuyens', function (Blueprint $table) {
            $table->foreignId('HoaDonId');
            $table->foreignId('NguoiVanChuyenId');
            $table->boolean('TrangThai')->nullable();
            $table->timestamps();
            $table->softDeletes();//nay la trang thai xoa
            $table->foreign('HoaDonId')->references('Id')->on('hoa_dons');
            $table->foreign('NguoiVanChuyenId')->references('Id')->on('nguoi_van_chuyens');
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
    }
}
