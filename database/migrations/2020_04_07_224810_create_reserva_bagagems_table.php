<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaBagagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_bagagems', function (Blueprint $table) {
            $table->id();

            $table->integer('ReservaId')->unsigned();
            $table->integer('BagagemId')->unsigned();
            $table->integer('PassageiroId')->unsigned();

            $table->foreign('ReservaId')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('BagagemId')->references('id')->on('bagagem')->onDelete('cascade');
            $table->foreign('PassageiroId')->references('id')->on('passageiros')->onDelete('cascade');

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
        Schema::dropIfExists('reserva_bagagems');
    }
}
