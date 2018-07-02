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

//DataTables
Route::get('users/datatable', 'UserController@getUsers')->name('users.datatable');
Route::get('roles/datatable', 'RoleController@getRoles')->name('roles.datatable');

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

Route::middleware(['auth'])->group(function(){ //verifica el permiso el usuario logueado

	//Estructura base del enrutamiento de los roles en post la ruta en name el nombre de la ruta y en middleware el nmbre del permiso
	
	//Roles 
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	Route::get('roles/edit/{role}', 'RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');

	Route::get('roles/delete/{role}', 'RoleController@delete')->name('roles.delete')
			->middleware('permission:roles.destroy');


	//Users 
	Route::post('users/store', 'UserController@store')->name('users.store')
			->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::get('users/create', 'UserController@create')->name('users.create')
			->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/edit/{user}', 'UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');

	Route::get('users/delete/{user}', 'UserController@delete')->name('users.delete')
			->middleware('permission:users.destroy');

	//Carnetizar
	Route::get('/personas/search', 'PersonaController@searchPersona')->name('personas.search')
			->middleware('permission:personas.search');

	Route::get('/personas', 'PersonaController@index')->name('personas.index')
			->middleware('permission:personas.index');
			
	Route::post('/personas', 'PersonaController@update')->name('personas.update')
			->middleware('permission:personas.update');

	Route::post('/personas', 'PersonaController@store')->name('personas.store')
			->middleware('permission:personas.store');

	//REP
	Route::get('/reps/create', 'RepController@create')->name('reps.create')
			->middleware('permission:reps.create');

	Route::post('/reps', 'RepController@store')->name('reps.store')
			->middleware('permission:reps.create');

	//importar bases de datos
	Route::get('/import/reps', 'ImportController@importReps')->name('import.reps')
			->middleware('permission:import.reps');;

});