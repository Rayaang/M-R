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
    return view('admin.login');
});


Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	//Supplier
	Route::resource('admin/supplier','SupplierController');
	//Vaccine
	Route::resource('admin/vaccine','VaccineController');
	//Patient
	Route::resource('admin/patient','PatientController');
	//Medecine
	Route::resource('admin/medicine','MedicineController');
	//User
	Route::resource('admin/user','UserCreateController');
	//Admin
	Route::resource('admin/admin','AdminCreateController');
	//Doctor
	Route::resource('admin/doctor','DoctorCreateController');

	// Admin auth::route
	Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login','Auth\LoginController@login');


});

Route::group(['namespace' => 'Doctor'],function(){
	Route::get('doctor/home','HomeController@index')->name('doctor.home');
	// Doctor auth::route
	Route::get('doctor-login','Auth\LoginController@showLoginForm')->name('doctor.login');
	Route::post('doctor-login','Auth\LoginController@login');

});

Route::group(['namespace' => 'User'],function(){
	
	Route::get('user/home','HomeController@index')->name('user.home');
	// Doctor auth::route
	Route::get('user-login','Auth\LoginController@showLoginForm')->name('user.login');
	Route::post('user-login','Auth\LoginController@login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
