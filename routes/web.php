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
//Route::get('/home/{lang}', 'HomeController@gethome');

Route::get('/', function () {
    return view('master');
});


Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/habitaciones', function () {
    return view('habitaciones');
});

Route::get('/restaurante', function () {
    return view('restaurante');
});

Route::get('/spa', function () {
    return view('spa');
});

Route::get('/tratamientos', function () {
    return view('tratamientos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/notificaciones', function () {
    return view('notificaciones');
});

Route::post('/language', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index'
))->name('language');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    //vistas para las que es necesario estar autentificado como usuario
    Route::get('/home', 'HomeController@index')->name('home');
    Route::put('/editaUsuario', 'EditaUsuarioController@editaUsuario');
    Route::put('/cancelaReservaUsuario', 'CancelaReservaUsuarioController@cancelaReservaUsuario');
});

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::put('/editaAdmin', 'EditaAdminController@editaAdmin');

Route::put('/newUser', 'crearUsuarioController@afegirUsuari');

Route::put('/editUser', 'editarUsuarioController@modificarUsuari');

Route::put('/delUser', 'eliminarUsuarioController@eliminarUsuari');




Route::get('reservahabitacion/{id}', 'ReservaController@getShow')->name('catalog.show');

Route::post('reservahabitacion/{id}', 'ReservaController@postCreate')->name('catalog.create');


Route::get('reservarestaurante/{id}', 'ReservaController@getShowrestaurante')->name('catalog.show');

Route::post('reservarestaurante/{id}', 'ReservaController@postCreaterestaurante')->name('catalog.create');


Route::get('reservaspa/{id}', 'ReservaController@getShowspa')->name('catalog.show');

Route::post('reservaspa/{id}', 'ReservaController@postCreatespa')->name('catalog.create');


Route::get('reservatratamientos/{id}', 'ReservaController@getShowtratamiento')->name('catalog.show');

Route::post('reservatratamientos/{id}', 'ReservaController@postCreatetratamiento')->name('catalog.create');


Route::get('/crearEmpleado', 'EmpleadoController@getEmpleado');
Route::post('/newEmp', 'EmpleadoController@creaEmpleado');

Route::get('/modificarEmpleado', 'EmpleadoController@muestraEmpleado');
Route::put('/editEmp', 'EmpleadoController@modificaEmpleado');

Route::get('/eliminarEmpleado', 'EmpleadoController@muestraEmpleado');
Route::put('/delEmp', 'EmpleadoController@eliminaEmpleado');

Route::get('/altaEmpleado', 'EmpleadoController@muestraEmpleado');
Route::put('/altaEmp', 'EmpleadoController@altaEmpleado');

Route::get('/bajaEmpleado', 'EmpleadoController@muestraEmpleado');
Route::put('/bajaEmp', 'EmpleadoController@bajaEmpleado');

//Route::get('/suscribete', 'suscribeController@getIndex');
Route::post('/suscribe', 'suscribeController@afegirSuscriptor');
