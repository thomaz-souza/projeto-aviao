<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            $table->integer('PassageiroId')->unsigned();
            $table->integer('PoltronaId')->unsigned();

            $table->decimal('ValorTotalReserva', 16,4);
            $table->dateTime('DataCompra');
            $table->dateTime('DataHoraCheckin');
            $table->string('StatusReserva', 1);

            $table->foreign('PoltronaId')->references('id')->on('poltronas')->onDelete('cascade');
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
        Schema::dropIfExists('reservas');
    }
}
