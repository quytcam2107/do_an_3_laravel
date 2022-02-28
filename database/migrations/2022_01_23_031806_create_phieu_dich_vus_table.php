<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuDichVusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieu_dich_vus', function (Blueprint $table) {
            $table->unsignedBigInteger('ma_dich_vu');
            $table->unsignedBigInteger('ma_khach_hang');
            $table->unsignedBigInteger('ma_phong');
            $table->integer('so_luong');
//            $table->primary(['ma_dich_vu','ma_khach_hang']);
//            $table->foreign('ma_dich_vu')->references('ma_dich_vu')->on('dich_vus')->onDelete('cascade');
//            $table->foreign('ma_khach_hang')->references('ma_khach_hang')->on('khach_hangs')->onDelete('cascade');
//            $table->foreign('ma_phong')->references('ma_phong')->on('phongs')->onDelete('cascade');
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
        Schema::dropIfExists('phieu_dich_vus');
    }
}
