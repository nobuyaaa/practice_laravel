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
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    Route::get('news/create', 'Admin\NewsController@add'); //-> middleware('auth');
    Route::post('news/create','Admin\NewsController@create');
    //課題4
    Route::get('profile/create','Admin\ProfileController@add');
    Route::post('profile/create','Admin\ProfileController@create');
    // -> middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit'); // -> middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update');
    
    Route::get('shiftboard/create','Admin\ShiftController@add');
    Route::post('shiftboard/create','Admin\ShiftController@create');
    Route::get('shiftboard', 'Admin\ShiftController@index');
    Route::get('shiftboard/edit','Admin\ShiftController@edit');
    Route::post('shiftboard/edit','Admin\ShiftController@update');
    Route::get('shiftboard/delete', 'Admin\ShiftController@delete');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth'); // 追記
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');


});

//課題3
//Route::get('xxx','xxx\AAAController@bbb')

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');
