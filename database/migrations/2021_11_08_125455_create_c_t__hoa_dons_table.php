<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_hoa_dons', function (Blueprint $table) {
            $table->foreignId('HoaDonId');
            $table->foreignId('SanPhamId');
            $table->integer('SoLuong');
            $table->double('ThanhTien');
            $table->timestamps();
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
        Schema::dropIfExists('ct_hoa_dons');
    }
}
