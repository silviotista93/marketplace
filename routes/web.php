<?php
use App\Mail\NewStoreRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

/*=============================================
CONSULTAS DE PRUEBAS
=============================================*/

/*  Route::get('prueba', function () { 
 return new NewStoreRequest('cristian','salazar','golosos');
}); */





/*=============================================
SELECCIONAR LENGUAJE
=============================================*/



/*=============================================
FRONTEND
=============================================*/

Route::group(['namespace' => 'Frontend'], function () {
   //rutas menu 
   Route::get('/menu', 'HomeController@menu')->name('menu');
   //Rutas para el modulo HOME
   Route::get('/', 'HomeController@index')->name('home');
   // rutas categorias home    
     Route::get('category/{category}', 'category\CategoriesController@show')->name('categories.show');
   // rutas subcategorias home    
     Route::get('subcategory/{subcategory}', 'subcategory\SubcategoriesController@show')->name('subcategories.show');
   // solicitud de empresa vista     
     Route::get('empresa/solicitud', 'empresa\EmpresaController@index')->name('empresa.solicitud');
     Route::post('empresa/add-store', 'empresa\EmpresaController@saveStore')->name('add-store');

});

/*=============================================
BACKEND ADMIN
=============================================*/
Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {

   //Rutas para el dashboard admin
   Route::get('/dashboard-root', 'admin\DashboardAdminController@index')->name('dashboard.admin');

   /*=============================================
       PRODUCTOS
    =============================================*/
   Route::get('/manage-products/add-products', 'admin\AddProductsController@index')->name('manage_add_products');
   /*=============================================
       CATEGORIAS Y SUBCATEGORIAS
    =============================================*/
   Route::get('/manage-categories/categories', 'admin\CategoriesController@index')->name('manage_categories');
   //lista de categorias
   Route::post('/datatables-categories-admin', 'admin\CategoriesController@tabla_categorias')->name('datatables.categories.admin');
   //agregar categoria
   Route::post('/admin/add-category', 'admin\CategoriesController@saveCategory')->name('add-category');

 
   //actualizar categoria
   Route::put('/admin/update-category', 'admin\CategoriesController@updateCategory')->name('update-category');
   //lista de subcategorias
   Route::post('/datatables-subcategories-admin', 'admin\SubCategoriesController@tabla_subcategorias')->name('datatables.subcategories.admin');
   //agregar sub categoria
   Route::post('/admin/add-sub-category', 'admin\SubCategoriesController@saveSubCategory')->name('add-sub-category');
   //actualizar sub categoria
   Route::put('/admin/update-sub-category', 'admin\SubCategoriesController@updateSubCategory')->name('update-sub-category');

   Route::get('/manage-categories/sub-categories', 'admin\SubCategoriesController@index')->name('manage_subcategories');

   /*=============================================
       PROFILES USERS
    =============================================*/
   //Agregar Usuarios
   Route::get('/profiles/add-user', 'partials\profiles\AddUserController@index')->name('dashboard.profile.add');
   Route::post('/profiles/add-store-user', 'partials\profiles\AddUserController@store')->name("dashboard.profile.create-user");
   Route::get('/profiles/edit-profile', 'partials\profiles\EditProfileController@index_user')->name("dashboard.profile.edit-profile");
   Route::put('/profiles/update-user', 'partials\profiles\EditProfileController@update_password')->name("update-user");

   //Listar Usuarios
   Route::get('/profiles/list-user', 'partials\profiles\ListUsersController@index')->name('dashboard.profile.list');
   Route::post('/profiles/get-list-user', 'partials\profiles\ListUsersController@getUsers')->name('dashboard.profile.get_list');

   //lista categorias
   Route::post("getCategories", "empresa\CategoryHelperController@categories");
   //lista de tipo
   Route::post("getTipos/{category}", "empresa\CategoryHelperController@typesForCategories");
   //lista de subcategorias
   Route::post("subcategories/{type}", "empresa\CategoryHelperController@subcategoriesFortype");
   //guardar producto
   Route::post("guardar-producto", "empresa\ProductController@store")->name("guardar-producto");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
