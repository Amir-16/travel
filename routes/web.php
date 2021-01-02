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

    Route::prefix('missions')->group(function(){

      Route::get('/view','Backend\MissionController@index')->name('missions.view');
      Route::get('/add','Backend\MissionController@add')->name('missions.add');
      Route::get('/edit/{id}','Backend\MissionController@edit')->name('missions.edit');
      Route::post('/store','Backend\MissionController@store')->name('missions.store');
      Route::post('/update/{id}','Backend\MissionController@update')->name('missions.update');
      Route::get('/delete/{id}','Backend\MissionController@delete')->name('missions.delete');

    });
    Route::prefix('visions')->group(function(){

      Route::get('/view','Backend\VisionController@index')->name('visions.view');
      Route::get('/add','Backend\VisionController@add')->name('visions.add');
      Route::get('/edit/{id}','Backend\VisionController@edit')->name('visions.edit');
      Route::post('/store','Backend\VisionController@store')->name('visions.store');
      Route::post('/update/{id}','Backend\VisionController@update')->name('visions.update');
      Route::get('/delete/{id}','Backend\VisionController@delete')->name('visions.delete');

    });
    Route::prefix('news_events')->group(function(){

      Route::get('/view','Backend\NewsEventController@index')->name('news_events.view');
      Route::get('/add','Backend\NewsEventController@add')->name('news_events.add');
      Route::get('/edit/{id}','Backend\NewsEventController@edit')->name('news_events.edit');
      Route::post('/store','Backend\NewsEventController@store')->name('news_events.store');
      Route::post('/update/{id}','Backend\NewsEventController@update')->name('news_events.update');
      Route::get('/delete/{id}','Backend\NewsEventController@delete')->name('news_events.delete');
    });

    Route::prefix('services')->group(function(){

      Route::get('/view','Backend\ServicesController@index')->name('services.view');
      Route::get('/add','Backend\ServicesController@add')->name('services.add');
      Route::get('/edit/{id}','Backend\ServicesController@edit')->name('services.edit');
      Route::post('/store','Backend\ServicesController@store')->name('services.store');
      Route::post('/update/{id}','Backend\ServicesController@update')->name('services.update');
      Route::get('/delete/{id}','Backend\ServicesController@delete')->name('services.delete');
    });


    Route::prefix('about')->group(function(){

      Route::get('/view','Backend\AboutController@index')->name('about.view');
      Route::get('/add','Backend\AboutController@add')->name('about.add');
      Route::get('/edit/{id}','Backend\AboutController@edit')->name('about.edit');
      Route::post('/store','Backend\AboutController@store')->name('about.store');
      Route::post('/update/{id}','Backend\AboutController@update')->name('about.update');
      Route::get('/delete/{id}','Backend\AboutController@delete')->name('about.delete');
    });

    Route::prefix('contacts')->group(function(){

      Route::get('/view','Backend\ContactController@index')->name('contacts.view');
      Route::get('/add','Backend\ContactController@add')->name('contacts.add');
      Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
      Route::post('/store','Backend\ContactController@store')->name('contacts.store');
      Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
      Route::get('/delete/{id}','Backend\ContactController@delete')->name('contacts.delete');
    });





});
