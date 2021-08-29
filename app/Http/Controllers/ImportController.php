<?php

namespace App\Http\Controllers;

use App\Http\Requests\CsvImportPhoneRequest;
use App\Imports\BasePhoneImport;
use GuzzleHttp\Client;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getImportPhone(){
        return view('import');
    }

    public function importBasePhone(CsvImportPhoneRequest $request){
        set_time_limit(10000);

        $upload = $request->file->store('files');

        $this->client->request('POST', '/', [
            'http_errors' => false,
            'headers' => [
                'Accept' => 'multipart/form-data',
                'Content-Type' => 'multipart/form-data',
            ],
            'multipart' => [
                [
                    'name' => 'file',
                    'contents' => fopen(url('storage/' . $upload), 'r')
                ]
            ],
            'base_uri' => getenv('BASE_URI')
        ]);

        return back();
    }
}
