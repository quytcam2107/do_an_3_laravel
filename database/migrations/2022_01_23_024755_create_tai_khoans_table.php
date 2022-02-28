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
            $table->bigIncrements('ma_tai_khoan');
            $table->unsignedBigInteger('ma_nhan_vien');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
            $table->unsignedBigInteger('ma_chuc_vu');
            $table->foreign('ma_nhan_vien')->references('ma_nhan_vien')->on('nhan_viens')->onDelete('cascade');
            $table->foreign('ma_chuc_vu')->references('ma_chuc_vu')->on('chuc_vus')->onDelete('cascade');
            $table->bigInteger('tinh_trang');
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
        Schema::dropIfExists('tai_khoans');
    }
}
