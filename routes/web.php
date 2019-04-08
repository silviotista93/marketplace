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
Route::get('prueba',function(){
   
});

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
Route::group(['namespace'=>'Backend', 'middleware' => 'auth'],function (){

    //Rutas para el dashboard admin
    Route::get('/dashboard-root','admin\DashboardAdminController@index')->name('dashboard.admin')->middleware("permiso:1,2,3");

    /*=============================================
       PRODUCTOS
    =============================================*/
    Route::get('/manage-products/add-products','admin\AddProductsController@index')->name('manage_add_products');
    /*=============================================
       CATEGORIAS Y SUBCATEGORIAS
    =============================================*/
    Route::get('/manage-categories/categories','admin\CategoriesController@index')->name('manage_categories');
    //lista de categorias
    Route::post('/datatables-categories-admin','admin\CategoriesController@tabla_categorias')->name('datatables.categories.admin');
   //agregar categoria
    Route::post('/admin/add-category','admin\CategoriesController@saveCategory')->name('add-category');
    //lista de subcategorias
    Route::post('/datatables-subcategories-admin','admin\SubCategoriesController@tabla_subcategorias')->name('datatables.subcategories.admin');
   //agregar categoria
    Route::post('/admin/add-category','admin\CategoriesController@saveCategory')->name('add-category');

    Route::get('/manage-categories/sub-categories','admin\SubCategoriesController@index')->name('manage_subcategories');

    /*=============================================
       PROFILES USERS
    =============================================*/
    //Agregar Usuarios
    Route::get('/profiles/add-user', 'partials\profiles\AddUserController@index')->name('dashboard.profile.add');
    Route::post('/profiles/add-store-user', 'partials\profiles\AddUserController@store')->name("dashboard.profile.create-user");

    //Listar Usuarios
    Route::get('/profiles/list-user', 'partials\profiles\ListUsersController@index')->name('dashboard.profile.list');
    Route::post('/profiles/get-list-user', 'partials\profiles\ListUsersController@getUsers')->name('dashboard.profile.get_list');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
