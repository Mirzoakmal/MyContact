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
/* на главной странице ("/") обрабатываем функцию index из файла SpisokController.php*/
Route::get('/',"SpisokController@index");
Route::get('/edit/{id}',"SpisokController@edit");
Route::get('/show/{id}',"SpisokController@show");
Route::get('/create',"SpisokController@create");
Route::get('/izbrannie/{id}',"SpisokController@izbrannie");
Route::get('/iz_spis',"SpisokController@iz_spis");
Route::get('/novie',"SpisokController@novie");
Route::post('/store',"SpisokController@store");
Route::post('/update/{id}',"SpisokController@update");
Route::post('/destroy',"SpisokController@destroy");


/*
Route::get('/', function () {
    return view('welcome');
});
*/
