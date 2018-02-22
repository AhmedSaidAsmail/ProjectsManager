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
    Route::get('owners/changePassword/{id}','Admin\OwnersController@changePassword')->name('owner.change.password');
    Route::put('owners/changePassword/{id}','Admin\OwnersController@updatePassword')->name('owner.update.password');
    Route::resource('/contractors','Admin\ContractorsController');
    Route::get('/contractor/active/{id}','Admin\ContractorsController@active')->name('contractors.active');
    Route::get('/contractor/inactive/{id}','Admin\ContractorsController@inactive')->name('contractors.inactive');
    Route::get('/contractor/password/{id}','Admin\ContractorsController@showPasswordForm')->name('contractors.password');
    Route::put('/contractor/password/{id}','Admin\ContractorsController@changePassword')->name('contractors.password');
});
