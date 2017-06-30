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

Route::get('/', 'CountryController@index');

Route::get('/ajax-city', [
    'as'=>'select.sel',
    'uses' => 'CityController@selectCity'
]);

Route::get('/admin', 'CountryController@create');

Route::post('/admin',[
    'as'=>'admin.store',
    'uses' => 'CountryController@store']);
Route::get('/admin_city', 'CityController@create');
Route::post('/admin_city',[
    'as'=>'admin.city',
    'uses' => 'CityController@store']);

