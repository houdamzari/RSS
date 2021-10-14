<?php

use App\Http\Controllers\AdminSpaceController;
use App\Http\Controllers\TheIndependantController;
use App\Http\Controllers\DailyMailController;
use App\Http\Controllers\FranceController;
use App\Http\Controllers\HesspressController;
use App\Http\Controllers\LaVieEcoController;
use App\Http\Controllers\LeSiteInfoController;
use App\Http\Controllers\PoliticioController;
use App\Http\Controllers\R360Controller;
use App\Http\Controllers\RTController;
use App\Http\Controllers\SkyNewsController;
use App\Http\Controllers\TelQuelController;
use App\Http\Controllers\testController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TheTelegraphController;
use App\Http\Controllers\TodayController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/store', [AdminController::class, 'store']);
Route::get('/admin', [AdminController::class, 'get']);
Route::get('/Hesspress', [HesspressController::class, 'Hesspress']);
Route::get('/Medias24', [HesspressController::class, 'media']);
Route::get('/telquel', [TelQuelController::class, 'telquel']);

Route::get('/get', [HesspressController::class, 'get']);
// routes/web.php
Route::get('/Medias', [testController::class, 'Medias']);

Route::get('/France24', [FranceController::class, 'France']);

Route::get('/LeSiteInfo', [LeSiteInfoController::class, 'LeSiteInfo']);


Route::get('/Home', [AdminController::class, 'tryy']);


Route::get('/today', [TodayController::class, 'today']);

Route::get('/360', [R360Controller::class, 'R360']);


Route::get('/lavieco', [LaVieEcoController::class, 'lavieco']);
Route::get('/test', [testController::class, 'test']);

//Worldwide routes

Route::get('/TheIndependant', [TheIndependantController::class, 'independant']);
Route::get('/dailymail', [DailyMailController::class, 'daily']);
Route::get('/rt', [RTController::class, 'rt']);
Route::get('/skynews', [SkyNewsController::class, 'sky']);
Route::get('/telegraph', [TheTelegraphController::class, 'telegraph']);
Route::get('/trend', [PoliticioController::class, 'TrendNews']);

Route::get('/Admin-Add', [AdminSpaceController::class, 'Add']);

Route::get('/HesspressDelete', [AdminSpaceController::class, 'Hesspress_all']);
Route::get('/HesspressDeleted/{id}', [AdminSpaceController::class, 'Hesspress_delete']);

Route::get('/TelquelDelete', [AdminSpaceController::class, 'Telquel_all']);
Route::get('/TelquelDeleted/{id}', [AdminSpaceController::class, 'Telquel_delete']);

Route::get('/FranceDelete', [AdminSpaceController::class, 'France_all']);
Route::get('/FranceDeleted/{id}', [AdminSpaceController::class, 'France_delete']);

Route::get('/R360Delete', [AdminSpaceController::class, 'R360_all']);
Route::get('/R360Deleted/{id}', [AdminSpaceController::class, 'R360_delete']);

Route::get('/dailymailDelete', [AdminSpaceController::class, 'dailymail_all']);
Route::get('/dailymailDeleted/{id}', [AdminSpaceController::class, 'dailymail_delete']);

Route::get('/laviecoDelete', [AdminSpaceController::class, 'lavieco_all']);
Route::get('/laviecoDeleted/{id}', [AdminSpaceController::class, 'lavieco_delete']);

Route::get('/todayDelete', [AdminSpaceController::class, 'today_all']);
Route::get('/todayDeleted/{id}', [AdminSpaceController::class, 'today_delete']);

Route::get('/telegraphDelete', [AdminSpaceController::class, 'telegraph_all']);
Route::get('/telegraphDeleted/{id}', [AdminSpaceController::class, 'telegraph_delete']);

Route::get('/rtDelete', [AdminSpaceController::class, 'rt_all']);
Route::get('/rtDeleted/{id}', [AdminSpaceController::class, 'rt_delete']);

Route::get('/independantDelete', [AdminSpaceController::class, 'independant_all']);
Route::get('/independantDeleted/{id}', [AdminSpaceController::class, 'independant_delete']);

Route::get('/skynewsDelete', [AdminSpaceController::class, 'skynews_all']);
Route::get('/skynewsDeleted/{id}', [AdminSpaceController::class, 'skynews_delete']);
