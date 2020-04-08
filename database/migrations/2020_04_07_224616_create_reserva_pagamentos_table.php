<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaPagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_pagamentos', function (Blueprint $table) {
            $table->id();

            $table->integer('ReservaId')->unsigned();
            $table->integer('QtdParcelas')->unsigned();
            $table->string('StatusPagamento');
            $table->dateTime('DataAprovacaoPagamento');

            $table->foreign('ReservaId')->references('id')->on('reservas')->onDelete('cascade');
            
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
        Schema::dropIfExists('reserva_pagamentos');
    }
}
