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

Route::get('/habitaciones/suite-Presidencial', function () {
    return view('hab_Suite_Presidencial');
});

Route::get('/habitaciones/suite-Superior', function () {
    return view('hab_Suite_Superior');
});

Route::get('/habitaciones/suite-Estandar', function () {
    return view('hab_Suite_Estandar');
});

Route::get('/habitaciones/hab-Superior', function () {
    return view('hab_Hab_Superior');
});

Route::get('/habitaciones/hab-Estandar', function () {
    return view('hab_Hab_Estandar');
});

Route::get('/restaurante', function () {
    return view('restaurante');
});

Route::get('/contacto', function () {
    return view('contacto');
});

//Route::get('/change_lang/{lang}', 'LangController@changeLang');

Route::post('/language', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index'
));
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
