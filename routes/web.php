<?php
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::group(['prefix' => '', 'middleware' => 'auth:web'], function () {
    Route::get('/', function () {
        return view('Admin.Welcome');
    })->name('admin.welcome');
    Route::resource('/engineer-types', 'Admin\EngineerTypesController');
    Route::resource('/owners', 'Admin\OwnersController');
    Route::get('owners/changePassword/{id}', 'Admin\OwnersController@changePassword')->name('owner.change.password');
    Route::put('owners/changePassword/{id}', 'Admin\OwnersController@updatePassword')->name('owner.update.password');
    Route::get('/owners/engineers/get', 'Admin\OwnersController@getEngineers')->name('owners.getEngineers');
    // contractors
    Route::resource('/contractors', 'Admin\ContractorsController');
    Route::get('/contractors/active/{id}', 'Admin\ContractorsController@active')->name('contractors.active');
    Route::get('/contractors/inactive/{id}', 'Admin\ContractorsController@inactive')->name('contractors.inactive');
    Route::get('/contractors/password/{id}', 'Admin\ContractorsController@showPasswordForm')->name('contractors.password');
    Route::put('/contractors/password/{id}', 'Admin\ContractorsController@changePassword')->name('contractors.password');
    Route::get('/contractors/engineers/get', 'Admin\ContractorsController@getEngineers')->name('contractors.getEngineers');
    // consultants
    Route::resource('/consultants', 'Admin\ConsultantsController');
    Route::get('/consultants/active/{id}', 'Admin\ConsultantsController@active')->name('consultants.active');
    Route::get('/consultants/inactive/{id}', 'Admin\ConsultantsController@inactive')->name('consultants.inactive');
    Route::get('/consultants/password/{id}', 'Admin\ConsultantsController@showPasswordForm')->name('consultants.password');
    Route::put('/consultants/password/{id}', 'Admin\ConsultantsController@changePassword')->name('consultants.password');
    // engineers
    Route::resource('/engineers', 'Admin\EngineersController');
    Route::get('/engineers/active/{id}', 'Admin\EngineersController@active')->name('engineers.active');
    Route::get('/engineers/inactive/{id}', 'Admin\EngineersController@inactive')->name('engineers.inactive');
    Route::get('/engineers/password/{id}', 'Admin\EngineersController@showPasswordForm')->name('engineers.password');
    Route::put('/engineers/password/{id}', 'Admin\EngineersController@changePassword')->name('engineers.password');
    Route::get('/engineers/get/Belongs', 'Admin\EngineersController@getBelong')->name('engineers.getBelongs');
    // projects
    Route::resource('/projects', 'Admin\ProjectsController');
    Route::resource('/submittals', 'Admin\SubmittalsController');
    Route::resource('/requests', 'Admin\RequestsController');
    Route::resource('/tenders', 'Admin\TendersController');
    Route::resource('/shops-drawings', 'Admin\ShopDrawingsController');
    Route::resource('/cordnation-drawings', 'Admin\CordnationDrawingsController');
    Route::resource('/change-orders', 'Admin\ChangeOrdersController');


});
