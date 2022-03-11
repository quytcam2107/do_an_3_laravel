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
            $table->unsignedBigInteger('ma_chuc_vu');
            $table->string('ten_dang_nhap');
            $table->string('mat_khau');
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
