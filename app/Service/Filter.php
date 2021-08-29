<?php

namespace App\Service;

use Illuminate\Support\Facades\DB;

class Filter
{

    public function queryBuilder(array $arrayPropriedades)
    {
        $client = DB::table('client')->where(function ($query) {
            $query->where(function ($query) use ($arrayPropriedades) {
                $query->where('phone', '=', $arrayPropriedades['phone']);
                if ($arrayPropriedades['portfolio']) {
                    $query->where('portfolio', '=', $arrayPropriedades['portfolio']);
                }
                if ($arrayPropriedades['type-business']) {
                    $query->where('type-business', '=', $arrayPropriedades['type-business']);
                }
                if ($arrayPropriedades['past-due-date-first'] && $arrayPropriedades['past-due-date-exit']) {
                    $query->whereBetween('past-due-date', [$arrayPropriedades['past-due-date-first'], $arrayPropriedades['past-due-date-exit']]);
                }
                if ($arrayPropriedades['date-send-first'] && $arrayPropriedades['date-send-exit']) {
                    $query->whereBetween('date-send', [$arrayPropriedades['date-send-first'], $arrayPropriedades['date-send-exit']]);
                }
                if ($arrayPropriedades['value-first'] && $arrayPropriedades['value-exit']) {
                    $query->whereBetween('value', [$arrayPropriedades['value-first'], $arrayPropriedades['value-exit']]);
                }
                if ($arrayPropriedades['past-due-date-first'] && !$arrayPropriedades['past-due-date-exit']) {
                    $query->where('past-due-date', '>=', $arrayPropriedades['past-due-date-first']);
                }
                if ($arrayPropriedades['date-send-first'] && !$arrayPropriedades['date-send-exit']) {
                    $query->where('date-send', '>=', $arrayPropriedades['date-send-first']);
                }
                if ($arrayPropriedades['value-first'] && !$arrayPropriedades['value-exit']) {
                    $query->where('value', '>=', $arrayPropriedades['value-first']);
                }
                if (!$arrayPropriedades['past-due-date-first'] && $arrayPropriedades['past-due-date-exit']) {
                    $query->where('past-due-date', '<=', $arrayPropriedades['past-due-date-exit']);
                }
                if (!$arrayPropriedades['date-send-first'] && $arrayPropriedades['date-send-exit']) {
                    $query->where('date-send', '<=', $arrayPropriedades['date-send-exit']);
                }
                if (!$arrayPropriedades['value-first'] && $arrayPropriedades['value-exit']) {
                    $query->where('value', '<=', $arrayPropriedades['value-exit']);
                }
            });
        });
        //Não sei o que fazer com essa query, vou deixar retornando e amanhã cedo discutimos
        return $client;
    }
}
