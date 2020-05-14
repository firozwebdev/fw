<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.front');
});

// Front end Routes

Route::get('/','FrontController@home')->name('front.home');
Route::get('/about','FrontController@about')->name('about');
Route::get('/services','FrontController@services')->name('services');
Route::get('/hacker-shop','FrontController@hacker_shop')->name('hacker.shop');
Route::get('/mobile-spy','FrontController@mobile_spy')->name('mobile.spy');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact','FrontController@contact')->name('contact');
Route::post('/contact','FrontController@sendMessage')->name('message.sent');





// Admin Panel Routes
// Route::get('/admin', function(){
//     return view('layout.admin');
// });



 Route::get('/ajax-getAllContactData','Admin\ContactController@getAllContactData')->name('getAllContactData');
 Route::get('/ajax-getAllUserData','Admin\UserController@getAllUserData')->name('getAllUserData');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(base_path('routes/admin.php'));