<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','FrontEnd\FrontendController@index');

Route::get('/contact','FrontEnd\FrontendController@contact');

Route::get('/about','FrontEnd\FrontendController@about');

Auth::routes();

//Backend Routes groups
Route::prefix('users')->group(function(){

  Route::get('/view','Backend\UserController@index')->name('users.view');
  Route::get('/add','Backend\UserController@add')->name('users.add');
  Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
  Route::post('/store','Backend\UserController@store')->name('users.store');
  Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
  Route::get('/delete','Backend\UserController@delete')->name('users.delete');

});
