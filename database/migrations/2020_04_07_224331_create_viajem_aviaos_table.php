<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajemAviaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajem_aviaos', function (Blueprint $table) {
            $table->id();

            $table->dateTime('DataViajem');
            $table->string('CidadeOrigem');
            $table->string('CidadeDestino');
            $table->decimal('TempoTotalViajem');
            $table->string('PortaoEmbarque');

            $table->integer('AeroportoId')->unsigned();
            $table->integer('AviaoId')->unsigned();
            $table->integer('CiaAereaId')->unsigned();

            $table->foreign('AeroportoId')->references('id')->on('aeroportos')->onDelete('cascade');
            $table->foreign('AviaoId')->references('id')->on('aviao')->onDelete('cascade');
            $table->foreign('CiaAereaId')->references('id')->on('cia_aereas')->onDelete('cascade');

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
        Schema::dropIfExists('viajem_aviaos');
    }
}
