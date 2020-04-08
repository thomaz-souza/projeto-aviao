<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassageiroDependentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passageiro_dependentes', function (Blueprint $table) {
            $table->id();

            $table->integer('ReservaId')->unsigned();
            $table->integer('PassageiroDependenteId')->unsigned();
            $table->integer('PoltronaId')->unsigned();
            
            $table->foreign('ReservaId')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('PassageiroDependenteId')->references('id')->on('passageiros')->onDelete('cascade');
            $table->foreign('PoltronaId')->references('id')->on('poltronas')->onDelete('cascade');

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
        Schema::dropIfExists('passageiro_dependentes');
    }
}
