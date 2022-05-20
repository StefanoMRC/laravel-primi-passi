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
    $data=[
        'saluto'=>'hello word'
    ];

    return view('home', $data);
})->name('home');

Route::get('/pagina2', function () {
    $data=[
        'saluto2'=>'hello word 2'
    ];

    return view('pagina2', $data);
})->name('pagina2');