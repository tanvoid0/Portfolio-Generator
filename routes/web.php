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
Route::get('/cv/{username}', 'HomeController@index')->name('index');


Route::get('test', function(){
    return view('test');
});


Route::group(['middleware' => ['web', 'auth']], function(){
	Route::get('panel/', 'HomeController@panel')->name('dashboard')->middleware('auth');
	Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

	Route::resource('panel/user', 'UserController')->middleware('auth');;
	Route::resource('panel/experience', 'ExperienceController')->middleware('auth');;
	Route::resource('panel/work', 'WorkController')->middleware('auth');;
	Route::resource('panel/skill', 'SkillController')->middleware('auth');;

	Route::get('/admin', 'HomeController@admin')->name('admin');
	Route::get('/admin/profile', function(){
		$user = Auth::user();
		return view('admin.pages.profile', compact('user'));
	})->name('profile');

});