<?php

namespace App\Http\Controllers;

use App\Service\ExportFileSms;
use Illuminate\Http\Request;
use App\Service\Filter;

class SmsController extends Controller
{
    public function index()
    {
        return view('templateSms.index');
    }
    public function send(Request $request)
    {
        $data = $request->all();
        dd($data);
        $service = new Filter();
        $result = $service->queryBuilder($data);
        $serviceExportFileSms = new ExportFileSms();
        return $serviceExportFileSms->generate(
            $result,
            'S',
            '0013',
            10994.46,
            '28082021',
            '1550',
            '1655',
            'ppppP_ftp2',
            '5869'
        );
    }



    public function generateFile()
    {
        $params = [
            [
                'phone' => '5514999999999',
                'message' => 'Aline, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'tpn_document' => '0.15267759562'
            ],
            [
                'phone' => '5514999999888',
                'message' => 'Pedro, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'tpn_document' => '0.15267759562'
            ],
            [
                'phone' => '5514999955888',
                'message' => 'Lucas, resgate seu boleto de forma 100% online, rapida e segura! Acesse: pagoufacil.com.br e regularize em segundos!',
                'tpn_document' => '0.15267759562'
            ],
        ];

        $serviceExportFileSms = new ExportFileSms();
        return $serviceExportFileSms->generate(
            $params,
            'S',
            '0013',
            10994.46,
            '28082021',
            '1550',
            '1655',
            'ppppP_ftp2',
            '5869'
        );
    }
}
