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

//Backend Routes groups with middleware

Route::group(['middleware'=>'auth'],function(){

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
    Route::post('/password/update','Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


  });
  //Logos Routes

  Route::prefix('logos')->group(function(){

    Route::get('/view','Backend\LogoController@index')->name('logos.view');
    Route::get('/add','Backend\LogoController@add')->name('logos.add');
    Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
    Route::post('/store','Backend\LogoController@store')->name('logos.store');
    Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
    Route::get('/delete/{id}','Backend\LogoController@delete')->name('logos.delete');
  });

  Route::prefix('sliders')->group(function(){

    Route::get('/view','Backend\SliderController@index')->name('sliders.view');
    Route::get('/add','Backend\SliderController@add')->name('sliders.add');
    Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/store','Backend\SliderController@store')->name('sliders.store');
    Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
    Route::get('/delete/{id}','Backend\SliderController@delete')->name('sliders.delete');
  });


});
