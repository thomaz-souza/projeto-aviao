<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoPessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco_pessoas', function (Blueprint $table) {
            $table->id();

            $table->string('Pais');
            $table->string('SiglaEstado', 2);
            $table->string('Cidade');
            $table->string('Bairro');
            $table->string('Rua');
            $table->string('Numero');
            
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
        Schema::dropIfExists('endereco_pessoas');
    }
}
