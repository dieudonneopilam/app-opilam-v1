<?php

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
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/agents', function () {
    return view('pages.agents');
})->name('agents');
Route::get('/add-agent', function () {
    return view('pages.add_agent');
})->name('add-agent');
Route::get('/edit-agent', function () {
    return view('pages.edit_agent');
})->name('edit-agent');
Route::get('/feeders', function () {
    return view('pages.feeders');
})->name('feeders');
Route::get('/add-feeder', function () {
    return view('pages.add_feeder');
})->name('add-feeder');
Route::get('/edit-feeder', function () {
    return view('pages.edit_feeder');
})->name('edit-feeder');
Route::get('/add-horaire', function () {
    return view('pages.add_horaire');
})->name('add-horaire');
Route::get('/edit-horaire', function () {
    return view('pages.edit_horaire');
})->name('edit-horaire');
Route::get('/program', function () {
    return view('pages.programmes');
})->name('program');
Route::get('/add-program', function () {
    return view('pages.add_programme');
})->name('add-program');
Route::get('/edit-program', function () {
    return view('pages.edit_programme');
})->name('edit-program');
Route::get('/horaire', function () {
    return view('pages.horaire_feeder');
})->name('horaire');
Route::get('/coupure', function () {
    return view('pages.pageCoupure');
})->name('coupure');
Route::get('/', function () {
    return view('pages.home');
});
