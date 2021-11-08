<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->Id();
            $table->string('TenSanPham');
            $table->string('MoTa');
            $table->integer('SoLuongTon');
            $table->double('DonGia');
            $table->string('HinhAnh');
            $table->integer('LuotMua');
            $table->foreignId('NhaCungCapId');
            $table->foreignId('LoaiSanPhamId');
            $table->timestamps();
            $table->foreign('NhaCungCapId')->references('Id')->on('nha_cung_caps');
            $table->foreign('LoaiSanPhamId')->references('Id')->on('loai_san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
}
