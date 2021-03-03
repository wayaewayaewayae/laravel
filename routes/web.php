<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard',function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2', Kasus2Controller::class);

use App\Http\Controllers\NegaraController;
Route::resource('negara', NegaraController::class);

use App\Http\Controllers\KasusController;
Route::resource('kasus', KasusController::class);

// livewire
Route::view('states-city','livewire.home');

//Frontand
use App\Http\Controllers\FrontandController;
Route::resource('/welcome',FrontandController::class);

