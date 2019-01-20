<?php
Route::get('/', function () {
    return redirect()->route('admin.welcome');
});
// Admin Login
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Contractors Login
Route::get('/contractor/login', 'AuthContractor\LoginController@showLoginForm')->name('contractor.login');
Route::post('/contractor/login', 'AuthContractor\LoginController@login')->name('contractor.login');
Route::get('/contractor/logout', 'AuthContractor\LoginController@logout')->name('contractor.logout');
//owner Login
Route::get('/owner/login', 'AuthOwner\LoginController@showLoginForm')->name('owner.login');
Route::post('/owner/login', 'AuthOwner\LoginController@login')->name('owner.login');
Route::get('/owner/logout', 'AuthOwner\LoginController@logout')->name('owner.logout');
// Engineer Login
Route::get('/engineer/login', 'AuthEngineer\LoginController@showLoginForm')->name('engineer.login');
Route::post('/engineer/login', 'AuthEngineer\LoginController@login')->name('engineer.login');
Route::get('/engineer/logout', 'AuthEngineer\LoginController@logout')->name('engineer.logout');
//multi middleware area
Route::group([], function () {
    Route::resource('/project/items/submittals', 'Admin\SubmittalsController');
    Route::get('/submittals/accordingToDate/get/', 'Admin\SubmittalsController@getAccordingToDate')->name('submittals.getAccordingToDate');
    Route::resource('/requests', 'Admin\RequestsController');
    Route::get('/requests/accordingToDate/get/', 'Admin\RequestsController@getAccordingToDate')->name('requests.getAccordingToDate');
    Route::resource('/letters', 'Admin\LettersController');
    Route::resource('/tests', 'Admin\TestsController');
    Route::get('/tests/accordingToDate/get/', 'Admin\TestsController@getAccordingToDate')->name('tests.getAccordingToDate');
    Route::resource('/tenders', 'Admin\TendersController');
    Route::resource('/shops-drawings', 'Admin\ShopDrawingsController');
    Route::resource('/cordnation-drawings', 'Admin\CordnationDrawingsController');
    Route::resource('/change-orders', 'Admin\ChangeOrdersController');
    Route::resource('/project-files', 'Admin\ProjectFilesController');
    Route::get('/project-files/accordingToDate/get/', 'Admin\ProjectFilesController@getAccordingToDate')->name('project-files.getAccordingToDate');
    Route::resource('/project/{projectId}/weekly-report', 'Admin\ProjectWeeklyController');
    Route::resource('/project/test-sorts', 'Admin\ProjectTestSortsController');
    Route::get('/project/test-sorts/get/Related', 'Admin\ProjectTestSortsController@getRelated')->name('test-sorts.getRelated');
    Route::resource('/project/items/schedules', 'Admin\ProjectSchedulesController');
    Route::resource('/project/items/time-line-items', 'Admin\TimeLinesItemsController');
    Route::resource('/project/items/schedulesNew', 'Admin\SchedulesController');
});
// Admin Area
Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/', function () {
        return view('Admin.Welcome');
    })->name('admin.welcome');
    Route::resource('/engineer-types', 'Admin\EngineerTypesController');
    Route::resource('/owners', 'Admin\OwnersController');
    Route::get('/owners/active/{id}', 'Admin\OwnersController@active')->name('owner.active');
    Route::get('/owners/inactive/{id}', 'Admin\OwnersController@inactive')->name('owner.inactive');
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
    Route::get('contractors/get/engineers', 'Admin\EngineersController@contractorEngineers')->name('engineers.contractors');
    Route::get('consultant/get/engineers', 'Admin\EngineersController@consultantEngineers')->name('engineers.consultant');
    Route::get('owners/get/engineers', 'Admin\EngineersController@ownersEngineers')->name('engineers.owners');
    Route::get('/engineers/active/{id}', 'Admin\EngineersController@active')->name('engineers.active');
    Route::get('/engineers/inactive/{id}', 'Admin\EngineersController@inactive')->name('engineers.inactive');
    Route::get('/engineers/password/{id}', 'Admin\EngineersController@showPasswordForm')->name('engineers.password');
    Route::put('/engineers/password/{id}', 'Admin\EngineersController@changePassword')->name('engineers.password');
    Route::get('/engineers/get/Belongs', 'Admin\EngineersController@getBelong')->name('engineers.getBelongs');
    // projects
    Route::resource('/projects', 'Admin\ProjectsController');
    //settings
    Route::resource('/settings/permissions', 'Admin\PermissionsController');
    Route::resource('/setting/project/time-lines', 'Admin\TimeLinesController');


});
// Contractor Area
Route::group(['prefix' => 'contractors', 'middleware' => 'auth:contractor'], function () {
    Route::get('/', function () {
        return view("Contractor.welcome");
    })->name('contractor.welcome');
    Route::resource('/contractor-projects', 'Contractor\ProjectsController');
});
// Owners area
Route::group(['prefix' => 'owners', 'middleware' => 'auth:owner'], function () {
    Route::get('/', function () {
        return view("Owner.welcome");
    })->name('owner.welcome');
    Route::resource('/owner-projects', 'Owner\ProjectsController');
});
// Engineer Area
Route::group(['prefix' => 'engineers', 'middleware' => 'auth:engineer'], function () {
    Route::get('/', function () {
        return view("Engineer.welcome");
    })->name('engineer.welcome');
    Route::resource('/engineer-projects', 'Engineer\ProjectsController');
});
