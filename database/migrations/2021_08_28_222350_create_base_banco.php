<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseBanco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_banco', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrato')->nullable();
            $table->string('estado_str')->nullable();
            $table->string('regiao_str')->nullable();
            $table->string('vencimento_str')->nullable();
            $table->string('da_int')->nullable();
            $table->string('valor_principal_num')->nullable();
            $table->string('saldo_contrato_num')->nullable();
            $table->string('produto_str')->nullable();
            $table->string('parcela_int')->nullable();
            $table->string('numero_total_parcelas_int')->nullable();
            $table->string('nome_str')->nullable();
            $table->string('cpf_str')->nullable();
            $table->string('tpn')->nullable();
            $table->string('regua')->nullable();
            $table->string('codigo_str')->nullable();
            $table->string('agencia_str')->nullable();
            $table->string('gerencia_str')->nullable();
            $table->string('diretoria_str')->nullable();
            $table->string('data_ultima_distrib_dat')->nullable();
            $table->string('id_nexxera')->nullable();
            $table->string('gcpj')->nullable();
            $table->string('coeficiente')->nullable();
            $table->string('descricao_str')->nullable();
            $table->string('maior_vencimento')->nullable();
            $table->string('data_ult_remessa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_banco');
    }
}
