<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('identification');
            $table->string ('name');
            $table->string ('lastname');            
            $table->date ('reservationDate');
            $table->string ('reservationHour');
            $table->integer ('adultQuantity');
            $table->integer ('childrenQuantity');
            $table->integer ('total');
            $table->string ('tourType');
            $table->string ('email');
            $table->string ('phone');


            //$table->bigInteger('user_id')->unsigned()->index();

            //$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('reservation');
    }
}