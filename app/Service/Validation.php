<?php

namespace App\Service;

class Validation
{
    public function phone($phone){
        $client = DB::table('phone')
                ->where('phone', '=', $phone)
                ->get();
        if($client){
            return true;
        }
        return false;
    }
}
