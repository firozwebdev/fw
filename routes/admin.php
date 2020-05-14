<?php

Route::get('login','Admin\LoginController@showLoginForm')->name('admin.login.get');
Route::post('login','Admin\LoginController@login')->name('admin.login');
Route::get('admin-forgot-password','Admin\ForgotPasswordController@adminLinkRequestForm')->name('admin.forgot.password');
Route::post('admin-password-mail','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password-reset/{token}','Admin\ResetPasswordController@resetPassword')->name('admin.password.reset');
Route::post('admin-password-update','Admin\ResetPasswordController@reset')->name('admin.password.update');


Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('logout','Admin\AdminController@logout')->name('admin.logout');
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
    
    Route::get('/contact-list/{id}/delete','Admin\ContactController@delete');
    Route::get('/contact-list/{id}/view','Admin\ContactController@view');
    Route::get('/contact-list/{id}/delete','Admin\ContactController@delete');
    Route::get('/contact-list/{id}/view','Admin\ContactController@view');

    Route::resource('contacts', 'Admin\ContactController');

Route::get('/users','Admin\UserController@index')->name('user.index');
Route::get('/users/create','Admin\UserController@create')->name('user.create');
Route::get('/ajax-getAllUserData','Admin\UserController@getAllUserData')->name('getAllUserData');

});