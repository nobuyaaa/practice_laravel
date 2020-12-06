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
        Schema::create('shiftboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //氏名
            $table->time('starttime'); //始まる時間
            $table->time('endtime'); //終わる時間
            // $table->string('dayofweek'); //曜日
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
