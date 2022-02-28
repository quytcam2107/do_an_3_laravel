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

            $table->bigIncrements('ma_phieu_dat_phong');
//            $table->integer('so_phong_dat');
            $table->float('tien_dat_coc');
//            $table->string('ghi_chu');
//            $table->unsignedBigInteger('loai_phong_dat');
            $table->string('ghi_chu');
//            $table->unsignedBigInteger('ma_phieu_dang_ki');
//            table->foreign('ma_phieu_dang_ki')->references('ma_khach_hang')->on('khach_hangs')->onDelete('cascade');
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
