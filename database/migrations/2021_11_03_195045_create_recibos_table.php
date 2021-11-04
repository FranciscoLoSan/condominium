<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->integer('Folio')->primary();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('vivienda_num');
            $table->foreign('vivienda_num')->references('numero')->on('viviendas');
            $table->date('fecha_corte');
            $table->double('monto');
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
        Schema::dropIfExists('recibos');
    }
}
