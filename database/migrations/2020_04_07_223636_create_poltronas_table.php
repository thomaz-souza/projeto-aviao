<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoltronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poltronas', function (Blueprint $table) {
            $table->id();

            $table->integer('ClasseId')->unsigned();

            $table->string('Cor');
            $table->string('NumeroAssento');
            $table->boolean('Reservado');
            
            $table->foreign('ClasseId')->references('id')->on('classe_aviao')->onDelete('cascade');
            
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
        Schema::dropIfExists('poltronas');
    }
}
