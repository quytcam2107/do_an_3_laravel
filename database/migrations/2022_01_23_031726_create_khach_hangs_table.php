<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->bigIncrements('ma_khach_hang');
            $table->string('ho_ten_khach');
            $table->string('email')->unique()->nullable();
            $table->string('dia_chi');
            $table->bigInteger('gioi_tinh');
            $table->integer('so_dien_thoai')->unique();
            $table->string('quoc_tich');
            $table->string('so_cmnd')->unique();
            $table->string('ghi_chu')->nullable();
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
        Schema::dropIfExists('khach_hangs');
    }
}
