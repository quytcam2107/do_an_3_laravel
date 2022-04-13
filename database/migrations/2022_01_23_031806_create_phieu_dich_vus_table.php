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
            $table->increments('ma_phieu_dich_vu');
            $table->unsignedBigInteger('ma_dich_vu')->nullable();
            $table->unsignedBigInteger('ma_phieu_dat_phong')->nullable();
            $table->integer('so_luong')->default(1)->nullable();
            $table->timestamps();
            $table->softDeletes();
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
