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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'BidderController@index')->name('bidder-dashboard');

Route::resource('/user-management/activation', 'UserManagementController');
Route::get('account_status/{id}', 'UserManagementController@account_status')->name('account_status');

Route::prefix('admin')->group(function()
    {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    });
 
Route::get('/bac', 'AdminController@bac')->name('bac.dashboard');
Route::get('/twg', 'AdminController@twg')->name('twg.dashboard');
