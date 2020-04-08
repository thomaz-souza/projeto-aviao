<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiaAereasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cia_aereas', function (Blueprint $table) {
            $table->id();

            $table->integer('PessoaId')->unsigned();
            $table->string('CodigoCiaAerea');
            
            $table->foreign('PessoaId')->references('id')->on('pessoas')->onDelete('cascade');

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
        Schema::dropIfExists('cia_aereas');
    }
}
