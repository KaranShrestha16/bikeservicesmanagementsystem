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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/users/profile', 'UserController@view')->name('users.view-profile');

Route::get('/users/edit_profile', 'UserController@edit')->name('users.edit-profile');

Route::put('/users/update_profile', 'UserController@update')->name('users.update-profile');

Route::get('/users/edit_password', 'UserController@edit_password')->name('users.edit-password');

Route::put('/users/update_password', 'UserController@update_password')->name('users.update-password');

Route::resource('mechanics', 'MechanicController');

Route::resource('bookings', 'BookingController');

Route::get('/booking_history', 'BookingController@history')->name('booking_history');

Route::resource('inquiries', 'InquiryController');



