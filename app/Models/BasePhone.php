<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasePhone extends Model
{
    use HasFactory;

    protected $table = 'base_phone';

    public $timestamps = false;

    protected $fillable = ['carteira', 'tn', 'contrato', 'cpf', 'tipo_contato', 'contato', 'classificacao', 'origem', 'score', 'data_modificacao', 'whatsapp'];

}
