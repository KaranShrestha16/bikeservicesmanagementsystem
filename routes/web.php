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

Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::get('/users/profile', 'UserController@view')->name('users.view-profile');

    Route::get('/users/edit_profile', 'UserController@edit')->name('users.edit-profile');

    Route::put('/users/update_profile', 'UserController@update')->name('users.update-profile');

    Route::get('/users/edit_password', 'UserController@edit_password')->name('users.edit-password');

    Route::put('/users/update_password', 'UserController@update_password')->name('users.update-password');

    Route::resource('mechanics', 'MechanicController');

    Route::resource('bookings', 'BookingController');

    Route::resource('inquiries', 'InquiryController');

    Route::get('inquiry_respond', 'InquiryController@responded')->name('inquiry_respond');

    Route::get('inquiry_history', 'InquiryController@history')->name('inquiry_history');

    Route::get('/booking-history', 'BookingController@history')->name('booking-history');

    Route::get('/service_request', 'BookingController@service_request')->name('service-request');

    Route::get('/service_request_view/{booking}', 'BookingController@service_request_view')->name('service-request-view');

    Route::get('/view_pending/{booking}', 'BookingController@view_pending')->name('view-pending');

    Route::get('/complete_service', 'BookingController@complete_service')->name('complete_service');

    Route::get('/complete_view/{booking}', 'BookingController@complete_view')->name('complete_view');

    Route::put('/update_pending/{booking}', 'BookingController@update_pending')->name('pending-update');

});




