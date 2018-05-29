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

//Route::get('/change_lang/{lang}', 'LangController@changeLang');

Route::post('/language', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index'
));

Route::group(['middleware' => 'auth'], function() {
    //vistas para las que es necesario estar autentificado
    
    Route::get('reservahabitacion/{id}', 'ReservaController@getShow')->name('catalog.show');

Route::post('reservahabitacion/{id}', 'ReservaController@postCreate')->name('catalog.create');


Route::get('reservarestaurante/{id}', 'ReservaController@getShowrestaurante')->name('catalog.show');

Route::post('reservarestaurante/{id}', 'ReservaController@postCreaterestaurante')->name('catalog.create');


Route::get('reservaspa/{id}', 'ReservaController@getShowspa')->name('catalog.show');

Route::post('reservaspa/{id}', 'ReservaController@postCreatespa')->name('catalog.create');


Route::get('reservatratamientos/{id}', 'ReservaController@getShowtratamiento')->name('catalog.show');

Route::post('reservatratamientos/{id}', 'ReservaController@postCreatetratamiento')->name('catalog.create');
  
    
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');



