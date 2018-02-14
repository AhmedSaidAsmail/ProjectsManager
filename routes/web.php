<?php
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::group(['prefix' => '','middleware'=>'auth:web'], function () {
    Route::get('/', function () {
        return view('Admin.Welcome');
    });
});
