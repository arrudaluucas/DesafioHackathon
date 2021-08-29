<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadFilesController extends Controller
{
    public function index()
    {
        return Storage::download('S [0013] 10994.46 - 28082021 1550 as 1655 - ppppP_ftp2 [5869] – 22.txt');
    }
}
