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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('site')->group(function(){
    Route::get('teste1', 'StringManipulationController');
    Route::post('StringManipulation', 'StringManipulationController@formSubmit');
    Route::get('teste2', 'WhileLoopController');
    Route::post('WhileLoop', 'WhileLoopController@calculator');
});