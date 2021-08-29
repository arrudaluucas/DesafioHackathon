<?php

namespace App\Http\Controllers;

use App\Service\ExportFileSms;
use Illuminate\Http\Request;
use App\Service\Filter;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

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
}
