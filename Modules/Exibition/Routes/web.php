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

Route::namespace('panel')->prefix('/panel')->middleware('auth','checkAdmin')->group(function() {
   Route::get('/exibition','ExibitionController@index')->name('exibition.index');
   Route::get('/exibition/create','ExibitionController@create')->name('exibition.create');
   Route::post('/exibition','ExibitionController@store')->name('exibition.store');
   Route::get('/exibition/{exibition}','ExibitionController@show')->name('exibition.show');
   Route::delete('/exibition/destroy/{exibition}','ExibitionController@destroy')->name('exibition.destroy');
   Route::get('/exibition/edit/{exibition}','ExibitionController@edit')->name('exibition.edit');
   Route::patch('/exibition/update/{exibition}','ExibitionController@update')->name('exibition.update');
    Route::get('/search','ExibitionController@search');
//   ---------------------------booth route--------------------------------

    Route::get('/booth','BoothController@index')->name('booth.index');
    Route::get('/booth/create/{exibition}','BoothController@create')->name('booth.create');
    Route::get('/booth/{booth}','BoothController@show')->name('booth.show');
    Route::get('/booth/edit/{booth}','BoothController@edit')->name('booth.edit');
    Route::delete('/booth/{booth}','BoothController@destroy')->name('booth.destroy');
    Route::post('/booth/','BoothController@store')->name('booth.store');
    Route::patch('booth/update/{booth}','BoothController@update')->name('booth.update');
    Route::get('/search1','BoothController@search');
    Route::get('/confrim/{booth}','BoothController@confrim')->name('confrim_reserve');
    Route::get('/unconfrim/{booth}','BoothController@unconfrim')->name('unconfrim_reserve');;
});
Route::namespace('main')->prefix('main')->group(function(){
    Route::get('/','ExController@index');
    Route::get('/search','ExController@search');
    Route::get('/{exibition}','ExController@show')->name('show.ex');
    Route::get('/showboots/{exibition}','ExController@showboots');
    Route::get('/reservebooth/{booth}','ExController@reserve');
});




