<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTablee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //ここにテーブルとカラム名を追加していきます。
        Schema::create('room', function($table)
        {
          $table->increments('id');
          $table->char('name',15);
          $table->smallInteger('maximum_capacity');
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
          Schema::drop('room');
    }
}
