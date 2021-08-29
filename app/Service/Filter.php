<?php

namespace App\Service;

class Filter
{
    public function queryBuilder(Array $arrayPropriedades){
        dd($arrayPropriedades);
        $clientList = DB::table('client')->where(function($query){
            $query ->where(function($query) use ($arrayPropriedades) {
                if($arrayPropriedades['portfolio']) {$query->where('portfolio', '=', $arrayPropriedades['portfolio']);}
                if($arrayPropriedades['type-business']) {$query->where('type-business', '=',$arrayPropriedades['type-business']);}
                if($arrayPropriedades['past-due-date-first'] && $arrayPropriedades['past-due-date-exit']) {$query->whereBetween('past-due-date', [$arrayPropriedades['past-due-date-first'], $arrayPropriedades['past-due-date-exit']]);}
                if($arrayPropriedades['date-send-first'] && $arrayPropriedades['date-send-exit']) {$query->whereBetween('date-send', [$arrayPropriedades['date-send-first'], $arrayPropriedades['date-send-exit']]);}
            });
    });
    //Não sei o que fazer com essa query, vou deixar retornando e amanhã cedo discutimos
    return $clientList;
    }
}
