<?php

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
    return view('homepage.index');
});

Route::get('/klussen-zwolle', function () {
    return view('klussen-zwolle.index');
});

Route::get('/badkamer-verbouwen', function () {
    return view('badkamer-verbouwen.index');
});

Route::get('/dak-onderhouden', function () {
    return view('dak-onderhouden.index');
});

Route::get('/electronica-onderhouden', function () {
    return view('electronica-onderhouden.index');
});

Route::get('/keuken-verbouwen', function () {
    return view('keuken-verbouwen.index');
});

Route::get('/vloer-leggen', function () {
    return view('vloer-leggen.index');
});

Route::get('/woonkamer-verbouwen', function () {
    return view('woonkamer-verbouwen.index');
});