<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function(){
	Route::get('list-users', 'UserController@listUsers');
	Route::get('list-user-details-in-pdf/{term}', 'UserController@getUserInPDF');
	
});

Route::post('login', 'Api\UserController@login')->name('login');
Route::group(['middleware' => ['auth:api'], 'namespace' => 'Api'], function(){
	Route::resource('roles', 'RoleController');
	Route::get('verify/{role}', 'UserController@verify');
	Route::post('roles/delete', 'RoleController@deleteAll');
	Route::get('my-settings', 'SettingController@getAllSettings');
	Route::get('save-my-settings/{settingType}/{settingValue}', 'SettingController@saveAllSettings');
	
	/* For autocomplete part */
	//Route::get('countries', 'ManageLocationController@getCountries');
	Route::get('states', 'ManageLocationController@getStates');
	Route::get('cities/{state_name?}', 'ManageLocationController@getCities');
	//Route::get('cities/{city_name?}', 'ManageLocationController@getCities');
	/* End For autocomplete part */
	
	Route::get('list-cities', 'ManageLocationController@listCities');
	Route::post('add-new-city', 'ManageLocationController@store');
	
});

// Route::get('load-localities/{cities?}', 'Api\ManageLocationController@loadLocalities');
// Route::get('load-candidates/{cities}', 'Api\ManageLocationController@loadCandidates');
Route::get('filtered-candidates/{filters}', 'Api\ManageLocationController@filteredCandidates');