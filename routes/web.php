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
    return view('welcome');
});

Route::get('/test', function () {
    $test = 'Some example text';
    return view('test', compact('test'));
});

Route::get('/item/create', 'ItemController@create');

Route::post('/item', 'ItemController@store');

Route::get('/item/show', 'ItemController@show');