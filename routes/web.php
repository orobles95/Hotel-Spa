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
    return view('master');
});

Route::get('/habitaciones', function () {
    return view('habitaciones');
});

Route::get('/hab', function () {
    return view('hab');
});

Route::get('/restaurante', function () {
    return view('restaurante');
});

Route::get('/contacto', function () {
    return view('contacto');
});