<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('Id');

            $table->string('Cpfcnpj', 18)->unique();
            $table->string('Rg', 15)->unique();
            $table->string('Descricao', 100);
            $table->string('RazaoSocial', 100);
            $table->string('InscricaoEstadual', 100);
            $table->dateTime('DataNascimento');
            $table->boolean('Inativo');

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
        Schema::dropIfExists('pessoas');
    }
}
