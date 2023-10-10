<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('auth.loginnn');
// })->name('loginnn');

Route::get('/', function () {
    return view('auth.loginnn');
});

Auth::routes();
//dashboard
Route::get('/dashboard', 'AdminDashBoardController@index');
Route::get('/test', 'AdminDashBoardController@test');
//lookup
Route::get('/lookup', 'AdminLookUpController@index')->name('lookup');
Route::get('/lookup-search', 'AdminLookUpController@search')->name('lookup-search');
//manage
Route::get('/bill_manage', 'AdminManageController@index')->name('bill_manage');
Route::get('/staticts_list_reci', 'AdminManageController@list')->name('staticts_list_reci');
Route::get('/staticts_order', 'AdminManageController@staticts_order')->name('staticts_order');
Route::get('/staticts_process', 'AdminManageController@staticts_process')->name('staticts_process');
Route::get('/staticts_reve', 'AdminManageController@staticts_reve')->name('staticts_reve');
//order
Route::get('/order_excel', 'AdminOrderController@order_excel')->name('order_excel');
Route::get('/order', 'AdminOrderController@list')->name('order');
//user
Route::get('/setting', 'AdminUserController@setting')->name('setting_acc');
Route::get('/change_password', 'AdminUserController@change_password')->name('change_password');
Route::get('/add_account', 'AdminUserController@add_account')->name('add_account');
Route::get('/setting_info_send', 'AdminUserController@setting_info_send')->name('setting_info_send');
Route::get('/config_user', 'AdminUserController@config_user')->name('config_user');
// Route::get('/change_password', 'AdminUserController@change_password')->name('change_password');







Route::get('/home', 'HomeController@index')->name('home');
