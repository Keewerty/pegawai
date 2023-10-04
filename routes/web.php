<?php

use App\Http\Controllers\kecamatanController;
use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\provinsiController;
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

Route::resource('provinsi', provinsiController::class);
Route::resource('kecamatan', kecamatanController::class);
Route::resource('kelurahan', kelurahanController::class);
Route::resource('pegawai', pegawaiController::class);
