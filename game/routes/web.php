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
    return view('welcome');
});
Route::get('/game', function(){
    return view('game');
    error_log('Hello1');
});
Route::get('/game?score', function(){
    $score=$_REQUEST["score"];
    error_log($score);
    
});
Route::get('/new', function(){
    return view('new');
});