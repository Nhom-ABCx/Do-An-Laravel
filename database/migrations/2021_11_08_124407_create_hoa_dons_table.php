<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->Id();
            $table->foreignId('NhanVienId');
            $table->foreignId('KhachHangId');
            $table->string('DiaChiGiao');
            $table->foreignId('TrangThaiHDId');
            $table->dateTime('NgayGiao');
            $table->double('GiamGia');
            $table->double('TongTien');
            $table->timestamps();
            $table->foreign('NhanVienId')->references('Id')->on('nhan_viens');
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
            $table->foreign('TrangThaiHDId')->references('Id')->on('trang_thai_h_d_s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_dons');
    }
}
