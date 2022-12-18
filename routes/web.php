<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Coupure;
use App\Http\Controllers\FeederController;
use App\Http\Controllers\Home;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('login',[AuthController::class,'login'])
    ->name('login');

Route::post('authentificate',[AuthController::class,'authentificate'])
    ->name('authentificate');

Route::post('logout',[AuthController::class,'logout'])
    ->name('logout');

Route::resource('user',UserController::class)
    ->middleware('auth');
Route::resource('home',Home::class)
    ->middleware('auth');
Route::resource('feeder',FeederController::class)
    ->middleware('auth');
Route::resource('programme',ProgramController::class)
    ->middleware('auth');
Route::resource('horaire',HoraireController::class)
    ->middleware('auth');
Route::resource('coupure',Coupure::class)
    ->middleware('auth');
Route::get('/faild',function(){
    return view('errors.error500');
})->name('faild');

