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

Route::get('/', function () {
    return view('base-layout');
});

Route::get('/comics', function () {
    $data = config('comics');
    // var_dump($data);
    return view('comics', ['cards' => $data]);
});

Route::get('/detail', function () {
    $data = config('comics');
    // var_dump($data);
    return view('detail', ['info' => $data[0]]);
});