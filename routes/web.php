<?php

use App\Http\Controllers\DownloadFilesController;
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

Route::get('/import_base_phone', [\App\Http\Controllers\ImportController::class, 'getImportPhone'])->name('import_phone_view');

Route::post('/import_phone', [\App\Http\Controllers\ImportController::class, 'importBasePhone'])->name('import_phone');
Route::get('/', [SmsController::class, 'index']);
Route::post('/send', [SmsController::class, 'send']);
Route::get('/teste-generate-file-sms', [SmsController::class, 'generateFile']);
