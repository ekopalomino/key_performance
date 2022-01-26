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
    return view('apps.pages.login');
});

Auth::routes(['register' => false]);
Route::group(['prefix' => 'apps', 'middleware' => ['auth']], function() {
    Route::resource('dashboard','App\DashboardController');
    /*Employee Position Sub Menu Route*/
	Route::get('configuration/employee-position','App\ConfigurationController@positionIndex')->name('position.index');
	Route::post('configuration/employee-position/store','App\ConfigurationController@positionStore')->name('position.store');
	Route::get('configuration/employee-position/edit/{id}','App\ConfigurationController@positionEdit')->name('position.edit');
	Route::post('configuration/employee-position/update/{id}','App\ConfigurationController@positionUpdate')->name('position.update');
	Route::post('configuration/employee-position/delete/{id}','App\ConfigurationController@positionDestroy')->name('position.destroy');
    /*Division Sub Menu Route */
    Route::get('configuration/division','App\ConfigurationController@divisionIndex')->name('division.index');
	Route::post('configuration/division/store','App\ConfigurationController@divisionStore')->name('division.store');
	Route::get('configuration/division/edit/{id}','App\ConfigurationController@divisionEdit')->name('division.edit');
	Route::post('configuration/division/update/{id}','App\ConfigurationController@divisionUpdate')->name('division.update');
});

