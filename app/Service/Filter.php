<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class Filter
{

    public function queryBuilder(array $arrayPropriedades)
    {
        $client = DB::table('base_phone')
            ->where(function ($query) {
                $query->where(function ($query) use ($arrayPropriedades) {
                    if ($arrayPropriedades['portfolio']) {
                        $query->where('base_phone.carteira', '=', $arrayPropriedades['portfolio']);
                    }
                    if ($arrayPropriedades['type-business']) {
                        $query->where('base_phone.tn', '=', $arrayPropriedades['type-business']);
                    }
                    if ($arrayPropriedades['past-due-date-first'] && $arrayPropriedades['past-due-date-exit']) {
                        $query->whereBetween('base_banco.vencimento_dat', [$arrayPropriedades['past-due-date-first'], $arrayPropriedades['past-due-date-exit']]);
                    }
                    if ($arrayPropriedades['value-first'] && $arrayPropriedades['value-exit']) {
                        $query->whereBetween('base_banco.valor_principal_num', [$arrayPropriedades['value-first'], $arrayPropriedades['value-exit']]);
                    }
                    if ($arrayPropriedades['past-due-date-first'] && !$arrayPropriedades['past-due-date-exit']) {
                        $query->where('base_banco.vencimento_dat', '>=', $arrayPropriedades['past-due-date-first']);
                    }
                    if ($arrayPropriedades['value-first'] && !$arrayPropriedades['value-exit']) {
                        $query->where('base_banco.valor_principal_num', '>=', $arrayPropriedades['value-first']);
                    }
                    if (!$arrayPropriedades['past-due-date-first'] && $arrayPropriedades['past-due-date-exit']) {
                        $query->where('base_banco.vencimento_dat', '<=', $arrayPropriedades['past-due-date-exit']);
                    }
                    if (!$arrayPropriedades['value-first'] && $arrayPropriedades['value-exit']) {
                        $query->where('base_banco.valor_principal_num', '<=', $arrayPropriedades['value-exit']);
                    }
                })
                ->join('base_baco', function($join) {
                    $join->on('base_banco.cpf_str', '=', 'base_phone.cpf')
                        ->where('base_banco.contrato_str', 'base_phone.contrato')
                        ->where('base_banco.tpn', 'base_phone.tn');
                })
                ->get();
        //Não sei o que fazer com essa query, vou deixar retornando e amanhã cedo discutimos
        return $client;
    }
}
