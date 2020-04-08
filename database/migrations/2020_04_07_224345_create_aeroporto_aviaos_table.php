<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAeroportoAviaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeroporto_aviaos', function (Blueprint $table) {
            $table->id();

            $table->integer('AeroportoId')->unsigned();
            $table->integer('AviaoId')->unsigned();
            $table->integer('ViajemAviaoId')->unsigned();

            $table->foreign('AeroportoId')->references('id')->on('aeroportos')->onDelete('cascade');
            $table->foreign('AviaoId')->references('id')->on('aviao')->onDelete('cascade');
            $table->foreign('ViajemAviaoId')->references('id')->on('viajem_aviao')->onDelete('cascade');

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
        Schema::dropIfExists('aeroporto_aviaos');
    }
}
