<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Schema;

class CreatePhieuDatPhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */

    public function up()
    {
        Schema::create('phieu_dat_phongs', function (Blueprint $table) {
            $table->bigIncrements('ma_phieu_dat_phong');
            $table->bigInteger('ma_khach_hang')->nullable();
            $table->bigInteger('ma_phong_dat')->unsigned()->nullable();
            $table->bigInteger('so_nguoi_di_kem')->nullable();
            $table->float('tien_dat_coc')->nullable();
            $table->timestamp('ngay_den')->useCurrent();
            $table->timestamp('ngay_di')->useCurrent();
            $table->string('nguoi_tao_phieu')->nullable();
            $table->string('ghi_chu')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('ma_phong_dat')->references('ma_phong')->on('phongs')->onDelete('cascade');
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
