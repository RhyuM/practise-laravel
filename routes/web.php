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

// user management
Route::get('/user-management/activation', 'UserManagementController@index');
Route::get('account_status/{id}', 'UserManagementController@accountStatus')->name('account_status');

// tender management
Route::resource('/tender-management/tender-list', 'ProjectController');

// bid opening
Route::get('/bid-opening/tenders', 'BidOpeningController@index')->name('tenders.index');

Route::prefix('admin')->group(function()
    {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    });

Route::get('/dashboard', 'AdminController@index')->name('admin.common.index');
Route::get('/home', 'BidderController@index')->name('bidder-index');    
