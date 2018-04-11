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

Auth::routes();
Route::get('/', 'HomeController@home');
//Route::get('/home', 'HomeController@home')->name('home');
Route::get('/id/{username}', 'HomeController@index')->name('index');
Route::get('panel/', 'HomeController@panel')->name('dashboard')->middleware('auth');

Route::resource('panel/user', 'UserController')->middleware('auth');;
Route::resource('panel/description', 'DescriptionController')->middleware('auth');;
Route::resource('panel/experience', 'ExperienceController')->middleware('auth');;
Route::resource('panel/work', 'WorkController')->middleware('auth');;
Route::resource('panel/skill', 'SkillController')->middleware('auth');;
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
