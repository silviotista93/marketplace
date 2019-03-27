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

/*=============================================
CONSULTAS DE PRUEBAS
=============================================*/


/*=============================================
SELECCIONAR LENGUAJE
=============================================*/



/*=============================================
FRONTEND
=============================================*/

Route::group(['namespace'=>'Frontend'],function (){

    //Rutas para el modulo HOME
    Route::get('/','HomeController@index')->name('home');
});

