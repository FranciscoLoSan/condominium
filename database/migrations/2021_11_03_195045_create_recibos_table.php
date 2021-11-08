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
        Schema::dropIfExists('recibos');

        Schema::create('recibos', function (Blueprint $table) {
            $table->integer('folio')->primary();

            $table->integer('user_id')->unsigned();            
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->integer('vivienda_num')->unsigned()->nullable();
            // $table->foreign('vivienda_num')->references('numero')->on('viviendas');
            // $table->foreign('vivienda_num')
            //     ->references('numero')
            //     ->on('viviendas')
            //     ->onDelete('set null');
            // $table->unsignedBigInteger('vivienda_num');
            // $table->foreign('vivienda_num')->references('numero')->on('viviendas');
            // $table->integer('vivienda_num')->unsigned();            
            // $table->foreign('vivienda_num')->references('numero')->on('viviendas');
            // $table->integer('vivienda_num');
            // $table->foreign('vivienda_num')->references('numero')->on('viviendas');
            $table->date('fecha_corte');
            $table->double('monto');
            $table->timestamps();
        });

        // Schema::create('recibos', function (Blueprint $table) {
        //     $table->foreign('vivienda_num')->references('numero')->on('viviendas');
        // });
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
