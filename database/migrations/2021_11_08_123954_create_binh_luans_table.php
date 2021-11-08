<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhLuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luans', function (Blueprint $table) {
            $table->Id();
            $table->string('NoiDung');
            $table->foreignId('KhachHangId');
            $table->foreignId('SanPhamId');
            $table->timestamps();
            $table->foreign('KhachHangId')->references('Id')->on('khach_hangs');
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
        Schema::dropIfExists('binh_luans');
    }
}
