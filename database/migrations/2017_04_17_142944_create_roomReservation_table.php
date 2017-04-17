<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('roomReservation', function($table)
      {
        $table->increments('id');
        $table->char('roomname',15);
        $table->datetime('starttime');
        $table->datetime('endtime');
        $table->char('usernamekj',10);
        $table->char('usernamekn',10);
        $table->char('Contents',30);
        $table->smallInteger('membernum');
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
        Schema::drop('roomReservation');
    }
}
