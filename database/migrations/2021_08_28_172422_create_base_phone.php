<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasePhone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_phone', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carteira')->nullable();
            $table->string('tn')->nullable();
            $table->string('contrato')->nullable();
            $table->string('cpf')->nullable();
            $table->string('tipo_contato')->nullable();
            $table->string('contato')->nullable();
            $table->string('classificacao')->nullable();
            $table->string('origem')->nullable();
            $table->string('score')->nullable();
            $table->string('data_modificacao')->nullable();
            $table->string('whatsapp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_phone');
    }
}
