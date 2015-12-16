<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
	return "return home view here";
});

/* TODO DESAFIOS */
Route::resource('desafios', 'DesafiosController');

/* TODO ACTIVIDADES */
Route::resource('actividades', 'ActividadesController');

/* TODO ACTIVIDADES->ACTUAR */
Route::resource('actuar', 'ActuarController');

/* TODO ACTIVIDADES->APRENDER */
Route::resource('aprender', 'AprenderController');

/* TODO ACTIVIDADES->IMAGINAR */
Route::resource('imaginar', 'ImaginarController');

/* TODO USERS */
Route::resource('usuarios', 'UsersController');

Route::resource('roles', 'RolesController');

Route::resource('comics', 'ComicsController');

Route::resource('comics-paginas', 'ComicsPaginasController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* GENERALES */
Route::get('about', 'PagesController@about');
Route::get('contacto', 'PagesController@contact');