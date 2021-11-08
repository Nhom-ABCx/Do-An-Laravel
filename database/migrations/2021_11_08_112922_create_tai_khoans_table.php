<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->Id();
            $table->string('Username');
            $table->string('Email');
            $table->string('Phone');
            $table->string('MatKhau');
            $table->foreignId('LoaiTaiKhoanId');
            $table->timestamps();
            $table->foreign('LoaiTaiKhoanId')->references('Id')->on('loai_tai_khoans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoans');
    }
}
