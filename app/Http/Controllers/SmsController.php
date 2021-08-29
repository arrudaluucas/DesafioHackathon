<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Filter;

class SmsController extends Controller
{
    public function index(){
        return view('templateSms.index');
    }

    public function send(Request $request){
        $data = $request->all();
        $requestIsValid = validPhone($data['phone'])
        $service = new Filter();
        $result = $service->queryBuilder($data);
    }
    public function validPhone($phone){

        return true;
    }
}
