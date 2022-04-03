<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDichVusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dich_vus', function (Blueprint $table) {
            $table->bigIncrements('ma_dich_vu');
            $table->string('ten_dich_vu');
            $table->bigInteger('gia_dich_vu');
            $table->string('mo_ta');
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
        Schema::dropIfExists('dich_vus');
    }
}
