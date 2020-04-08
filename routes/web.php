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

Route::get('/produto/{id?}/roupas', function($id = ''){
    return "Produto: {$id}";
});

Route::get('/passagem/{id}', function($id){
    return "Codigo do produto: {$id}";
});

Route::get('/', function () {
    return view('welcome');
});
