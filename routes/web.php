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
    return view('auth.login');
});


Route::get('admin', function () {
    return view('admin.panel');
})->middleware('auth')->name('admin.page');




//Auth::routes();

//rutas template.

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


//rutas template

Route::get('/home', 'HomeController@index')->name('home');

//web Blog
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('blog/{slug}', 'Web\PageController@post')->name('post');
Route::get('category/{slug}', 'Web\PageController@category')->name('category');
Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');


//Se crean las rutas del sistema
//MUY IMPORTANTE AGREGAR EL MIDDLAWERE AL ARCHIVO kERNEL.PHP

Route::middleware(['auth'])->group(function(){

    //rutas roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create' , 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //rutas productos
    Route::post('products/store', 'ProductController@store')->name('products.store')
    ->middleware('permission:products.create');

    Route::get('products', 'ProductController@index')->name('products.index')
    ->middleware('permission:products.index');

    Route::get('products/create' , 'ProductController@create')->name('products.create')
    ->middleware('permission:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
    ->middleware('permission:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
    ->middleware('permission:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
    ->middleware('permission:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
    ->middleware('permission:products.edit');


     //rutas tags
     Route::post('tags/store', 'TagController@store')->name('tags.store')
     ->middleware('permission:tags.create');

     Route::get('tags', 'TagController@index')->name('tags.index')
     ->middleware('permission:tags.index');

     Route::get('tags/create' , 'TagController@create')->name('tags.create')
     ->middleware('permission:tags.create');

     Route::put('tags/{tag}', 'TagController@update')->name('tags.update')
     ->middleware('permission:tags.edit');

     Route::get('tags/{tag}', 'TagController@show')->name('tags.show')
     ->middleware('permission:tags.show');

     Route::delete('tags/{tag}', 'TagController@destroy')->name('tags.destroy')
     ->middleware('permission:tags.destroy');

     Route::get('tags/{tag}/edit', 'TagController@edit')->name('tags.edit')
     ->middleware('permission:tags.edit');


     //rutas categorias
     Route::post('categories/store', 'CategoryController@store')->name('categories.store')
     ->middleware('permission:categories.create');

     Route::get('categories', 'CategoryController@index')->name('categories.index')
     ->middleware('permission:categories.index');

     Route::get('categories/create' , 'CategoryController@create')->name('categories.create')
     ->middleware('permission:categories.create');

     Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
     ->middleware('permission:categories.edit');

     Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
     ->middleware('permission:categories.show');

     Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
     ->middleware('permission:categories.destroy');

     Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
     ->middleware('permission:categories.edit');


      //rutas permisos
      Route::post('permissions/store', 'PermissionsController@store')->name('permissions.store')
      ->middleware('permission:permissions.create');

      Route::get('permissions', 'PermissionsController@index')->name('permissions.index')
      ->middleware('permission:permissions.index');

      Route::get('permissions/create' , 'PermissionsController@create')->name('permissions.create')
      ->middleware('permission:permissions.create');

      Route::put('permissions/{permissions}', 'PermissionsController@update')->name('permissions.update')
      ->middleware('permission:permissions.edit');

      Route::get('permissions/{permissions}', 'PermissionsController@show')->name('permissions.show')
      ->middleware('permission:permissions.show');

      Route::delete('permissions/{permissions}', 'PermissionsController@destroy')->name('permissions.destroy')
      ->middleware('permission:permissions.destroy');

      Route::get('permissions/{permissions}/edit', 'PermissionsController@edit')->name('permissions.edit')
      ->middleware('permission:permissions.edit');


     //rutas post
     Route::post('posts/store', 'PostController@store')->name('posts.store')
     ->middleware('permission:posts.create');

     Route::get('posts', 'PostController@index')->name('posts.index')
     ->middleware('permission:posts.index');

     Route::get('posts/create' , 'PostController@create')->name('posts.create')
     ->middleware('permission:posts.create');

     Route::put('posts/{post}', 'PostController@update')->name('posts.update')
     ->middleware('permission:posts.edit');

     Route::get('posts/{post}', 'PostController@show')->name('posts.show')
     ->middleware('permission:posts.show');

     Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy')
     ->middleware('permission:posts.destroy');

     Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit')
     ->middleware('permission:posts.edit');




    //rutas usuarios

    Route::post('users/store', 'UserController@store')->name('users.store')
    ->middleware('permission:users.create');

    Route::get('users/create' , 'UserController@create')->name('users.create')
    ->middleware('permission:users.create');

    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');
});


Route::resource('ponentes', 'PonenteController');


Route::resource('sertores', 'SertoreController');

Route::resource('cursos', 'CursoController');

Route::resource('profesors', 'ProfesorController');