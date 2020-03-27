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

Route::get('/user-management/activation', 'UserManagementController@index');
Route::get('account_status/{id}', 'UserManagementController@accountStatus')->name('account_status');

Route::resource('tender-management/tender-list', 'ProjectController');

Route::prefix('admin')->group(function()
    {
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    });

Route::get('/bac', 'AdminController@bac')->name('bac.dashboard');
Route::get('/twg', 'AdminController@twg')->name('twg.dashboard');
Route::get('/home', 'BidderController@index')->name('bidder-dashboard');    

// Route::get('/projects', 'ProjectController@index')->name('projects.index');
// Route::get('/projects/{id}/edit','ProjectController@edit')->name('projects.edit');
// Route::get('/projects/{id}/delete','ProjectController@destroy')->name('projects.destroy');
// Route::get('/create','ProjectController@create')->name('projects.create');
// Route::post('/create','ProjectController@store')->name('projects.store');
// Route::post('/Project/update','ProjectController@update')->name('projects.update');  