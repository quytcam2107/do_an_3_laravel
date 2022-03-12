<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuDatPhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_dat_phongs', function (Blueprint $table) {
            $table->integer('so_phong_dat');
            $table->dateTime('thoi_gian_dat_phong');
            $table->bigInteger('ma_khach_hang');
            $table->bigInteger('so_luong_nguoi_lon');
            $table->bigInteger('so_luong_tre_em');
            $table->string('ghi_chu');
            $table->bigIncrements('ma_phieu_dat_phong');
            $table->float('tien_dat_coc');
            $table->string('ghi_chu');;
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
        Schema::dropIfExists('phieu_dat_phongs');
    }
}
