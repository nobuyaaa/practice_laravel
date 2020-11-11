<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiftboard', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //氏名
            $table->integer('starttime'); //始まる時間
            $table->integer('endtime'); //終わる時間
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shiftboard');
    }
}
