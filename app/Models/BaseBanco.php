<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseBanco extends Model
{
    use HasFactory;

    protected $table = 'base_banco';

    public $timestamps = false;

    protected $fillable = ['contrato_str',	'estado_str',	'regiao_str',	'vencimento_dat',	'da_int',	'valor_principal_num',	'saldo_contrato_num',	'produto_str',	'parcela_int',	'numero_total_parcelas_int',	'nome_str',	'cpf_str',	'tpn',	'regua',	'codigo_str',	'agencia_str',	'gerencia_str',	'diretoria_str',	'data_ultima_distrib_dat',	'id_nexxera',	'gcpj',	'coeficiente	descricao_str',	'maior_vencimento',	'data_ult_remessa'];
}
