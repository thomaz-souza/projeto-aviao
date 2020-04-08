<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioPoltronasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_poltronas', function (Blueprint $table) {
            $table->id();

            $table->integer('FuncionarioId')->unsigned();
            $table->integer('PoltronaId')->unsigned();
            
            $table->foreign('FuncionarioId')->references('id')->on('funcionarios')->onDelete('cascade');
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
        Schema::dropIfExists('funcionario_poltronas');
    }
}
