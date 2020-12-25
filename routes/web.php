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
  Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');
});

//profiles Route
Route::prefix('profile')->group(function(){
  Route::get('/view','Backend\ProfileController@index')->name('profiles.view');
  Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
  Route::post('/update','Backend\ProfileController@update')->name('profiles.update');
  Route::get('/password/view','Backend\ProfileController@passwordView')->name('profiles.password.view');

});

// Doner Routes
Route::prefix('doners')->group(function(){
  Route::get('/view','Backend\DonerController@index')->name('doners.view');
  Route::get('/add','Backend\DonerController@add')->name('doners.add');
  Route::get('/edit/{id}','Backend\DonerController@edit')->name('doners.edit');
  Route::post('/store','Backend\DonerController@store')->name('doners.store');
  Route::post('/update/{id}','Backend\DonerController@update')->name('doners.update');
  Route::get('/delete/{id}','Backend\DonerController@delete')->name('doners.delete');


});
