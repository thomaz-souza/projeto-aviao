<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelamentoReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelamento_reservas', function (Blueprint $table) {
            $table->id();

            $table->integer('ReservaId')->unsigned();
            $table->decimal('Valor')->unsigned();
            $table->dateTime('DataCancelamento');

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
        Schema::dropIfExists('cancelamento_reservas');
    }
}
