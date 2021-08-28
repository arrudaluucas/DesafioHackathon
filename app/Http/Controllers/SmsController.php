<?php

namespace App\Http\Controllers;

use App\Jobs\ExportFileSms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index(){
        return view('templateSms.index');
    }

    public function generateFile()
    {
        $params = [
            [
                'phone' => '5514999999999',
                'message' => 'Aline, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'text' => '0.15267759562'
            ],
            [
                'phone' => '5514999999888',
                'message' => 'Pedro, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'text' => '0.15267759562'
            ],
            [
                'phone' => '5514999955888',
                'message' => 'Lucas, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'text' => '0.15267759562'
            ],
        ];
        

        dispatch(new ExportFileSms(
            $params,
            'S',
            '0013',
            10994.46,
            '28082021',
            '1550',
            '1655',
            'ppppP_ftp2',
            '5869'
        ))->delay(5);
    }
}
