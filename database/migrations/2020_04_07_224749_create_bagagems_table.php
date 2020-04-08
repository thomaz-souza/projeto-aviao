<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bagagems', function (Blueprint $table) {
            $table->id();

            $table->decimal('Peso')->unsigned();
            
            $table->decimal('Largura')->unsigned();
            $table->decimal('Altura')->unsigned();
            $table->decimal('Comprimento')->unsigned();

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
        Schema::dropIfExists('bagagems');
    }
}
