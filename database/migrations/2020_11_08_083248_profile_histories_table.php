<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
    // Schema::rename('変更前のテーブル名', '変更後のテーブル名');
        // という形でテーブル名の変更を指定します。
      
    
        //
        Schema::create('profile_histories', function(Blueprint $table){
            $table->increments('id');
            $table->integer('profile_id');
            $table->string('edited_at');
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
        //
        Schema::dropIfExists('profile_histories');
    }
}
