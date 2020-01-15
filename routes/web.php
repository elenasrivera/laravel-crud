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
Route::get('/',function(){
    return view('welcome');
});
Route::get('/hola',function(){
    return "Hola Mundo";
});
Route::get('/',function($id){
    return "Mi codigo es: ".$id;
});
Route::get('/','StudentController@index')->name('home');