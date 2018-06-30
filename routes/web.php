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

Route::get('recover-password', function () {
    return view('reset');
});


Route::get('received', function () {
    return view('received');
;
})->middleware('auth');;


Route::get('/dashboard', function () {
    return view('dashboard');
;
})->middleware('auth');;


Route::get('new', function () {
    return view('new');
;
})->middleware('auth');;

Route::get('load', function () {
    return view('load');
;
})->middleware('auth')->middleware('auth');;


Route::get('sent', function () {
    return view('sent');
})->middleware('auth');
;


Route::get('logout', function () {
    //return view('sent');
//})->middleware('auth');
	Auth::logout();
	return view('welcome');


});


Route::get('/who', function () {
    //return view('welcome');

    return "WTF are you?";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies', 'CompaniesController');
Route::resource('projects', 'ProjectsController');
Route::resource('roles', 'RolesController');
Route::resource('tasks', 'TasksController');
Route::resource('users', 'UsersController');