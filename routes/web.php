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

/*=============================================
BACKEND ADMIN
=============================================*/
Route::group(['namespace'=>'Backend'],function (){

    //Rutas para el dashboard admin
    Route::get('/dashboard-root','admin\DashboardAdminController@index')->name('dashboard.admin');



    /*=============================================
       PROFILES USERS
    =============================================*/
    //Agregar Usuarios
    Route::get('/profiles/add-user', 'partials\profiles\AddUserController@index')->name('dashboard.profile.add');

    //Listar Usuarios
    Route::get('/profiles/list-user', 'partials\profiles\ListUsersController@index')->name('dashboard.profile.list');
});
