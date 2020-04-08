<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatoPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_pessoas', function (Blueprint $table) {
            $table->id();

            $table->string('Celular', 30);
            $table->string('Telefone', 30);
            $table->string('Email', 100);
            
            $table->integer('PessoaId')->unsigned();

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
        Schema::dropIfExists('contato_pessoas');
    }
}
