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

Route::get('/home', 'HomeController@index');
Route::get('settings/profile', 'SettingsController@profile');
Route::get('settings/profile/edit', 'SettingsController@editProfile');
Route::post('settings/profile', 'SettingsController@updateProfile');
Route::get('settings/password', 'SettingsController@editPassword');
Route::post('settings/password', 'SettingsController@updatePassword');

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {
	Route::resource('members', 'MembersController');
  Route::get('members/admins/create', [
    'as'   => 'member.admins.create',
    'uses' => 'MembersController@createadmin'
  ]);
  Route::get('members/user/create', [
    'as'   => 'member.users.create',
    'uses' => 'MembersController@createuser'
  ]);
  Route::get('members/atasan/create', [
    'as'   => 'member.atasans.create',
    'uses' => 'MembersController@createatasan'
  ]);
	Route::post('members/save/admins', [
    'as'   => 'members.save.admins',
    'uses' => 'MembersController@admin'
  ]);
	Route::post('members/save/atasans', [
    'as'   => 'members.save.atasans',
    'uses' => 'MembersController@atasan'
  ]);
	Route::resource('laporans', 'LaporansController');
});