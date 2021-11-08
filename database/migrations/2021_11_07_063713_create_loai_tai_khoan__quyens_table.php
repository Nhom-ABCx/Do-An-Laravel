<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiTaiKhoanQuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_tai_khoan_quyens', function (Blueprint $table) {
            $table->foreignId('LoaiTaiKhoanId');
            $table->foreignId('QuyenId');
            $table->string('MoTa');
            $table->timestamps();
            $table->foreign('LoaiTaiKhoanId')->references('Id')->on('loai_tai_khoans');
            $table->foreign('QuyenId')->references('Id')->on('quyens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_tai_khoan_quyens');
    }
}
