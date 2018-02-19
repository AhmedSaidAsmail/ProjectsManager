<?php
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => '','middleware'=>'auth:web'], function () {
    Route::get('/', function () {
        return view('Admin.Welcome');
    })->name('admin.welcome');
    Route::resource('/engineer-types','Admin\EngineerTypesController');
    Route::resource('/owners','Admin\OwnersController');
});
