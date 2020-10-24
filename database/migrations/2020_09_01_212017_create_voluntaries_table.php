<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntaries', function (Blueprint $table) {
            $table->bigIncrements('id', 20)->unique();
            $table->string('Nombre');
            $table->string('Apellido_1');
            $table->string('Apellido_2');
            $table->integer('Edad');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Email');
            $table->integer('Cantidad');
            $table->string('Descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations RRR.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voluntaries');
    }
}
