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

/*
hna db tangol ila 3taq user 2hd url fb/Todos frha löi msoel 3la had url hwa class@method
TodoController=class
index=methode
*/
Route::get('todos','TodoController@index');

//todo hwa parameter y3ni aykhsk mni tmxi conttrol ta tma khsq t3tuh nfs ssmiya

Route::get('todos/{todo}','TodoController@show')->name('todo');//route model binding inchae 3la9a 
