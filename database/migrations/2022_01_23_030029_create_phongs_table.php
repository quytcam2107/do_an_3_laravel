<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->bigIncrements('ma_phong');
            $table->string('ten_phong');
            $table->unsignedBigInteger('ma_loai_phong');
            $table->foreign('ma_loai_phong')->references('ma_loai_phong')->on('loai_phongs')->onDelete('cascade');
            $table->string('tang',10);
            $table->string('mo_ta');
            $table->float('gia_phong');
            $table->string('anh_phong');
            $table->bigInteger('tinh_trang_phong')->default('1');
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
        Schema::dropIfExists('phongs');
    }
}
