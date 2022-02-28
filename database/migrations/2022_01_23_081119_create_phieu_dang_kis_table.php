<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuDangKisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_dang_kis', function (Blueprint $table) {
            $table->bigIncrements('ma_phieu_dang_ki');
            $table->integer('so_phong_dat');
            $table->dateTime('thoi_gian_dat_phong');
            $table->bigInteger('ma_khach_hang');
            $table->bigInteger('so_luong_nguoi_lon');
            $table->bigInteger('so_luong_tre_em');
            $table->string('ghi_chu');
//            $table->unsignedBigInteger('ma_khach_hang');
//            table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hangs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieu_dang_kis');
    }
}
