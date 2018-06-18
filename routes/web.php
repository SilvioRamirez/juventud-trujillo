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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('personas', 'PersonaController');

Route::get('/users', 'UserController@index');
Route::get('/users/list', 'UserController@getUsers')->name('datatable.users');

Route::get('/personas/search', 'PersonaController@searchPersona')->name('personas.search');
Route::get('/personas', 'PersonaController@index')->name('personas.index');
Route::post('/personas', 'PersonaController@update')->name('personas.update');
Route::post('/personas', 'PersonaController@store')->name('personas.store');
Route::get('/personas/list', 'PersonaController@list');
Route::get('/personas/list/data', 'PersonaController@listData');

Route::get('/familiars/list/{cedula}', 'FamiliarController@getFamiliars')->name('datatable.familiars');
Route::post('/familiars/store/', 'FamiliarController@store')->name('familiars.store');
Route::delete('/familiars/delete/{id}', 'FamiliarController@deleteFamiliar');
Route::put('/familiars/edit/{id}', 'FamiliarController@updateFamiliar');

Route::get('/import/reps', 'ImportController@importReps');
Route::get('/import/bancos', 'ImportController@importBancos');

Route::get('/parroquias/{id_municipio}', 'ParroquiaController@getParroquias');

Route::get('/municipios', 'MunicipioController@getMunicipios');

