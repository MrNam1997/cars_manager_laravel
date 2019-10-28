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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('cars')->group(function () {
    Route::get('list','CarManagerController@index')->name('cars.list');
    Route::get('create','CarManagerController@create')->name('cars.create');
    Route::post('store','CarManagerController@store')->name('cars.store');
    Route::get('edit/{id}','CarManagerController@edit')->name('cars.edit');
    Route::post('update/{id}','CarManagerController@update')->name('cars.update');
    Route::get('delete/{id}','CarManagerController@destroy')->name('cars.destroy');
});
