<?php

use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SmsController::class, 'index']);
Route::post('/send', [SmsController::class, 'send']);
Route::get('/teste-generate-file-sms', [SmsController::class, 'generateFile']);
