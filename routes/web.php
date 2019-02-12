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
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/threads', 'ThreadController@index');
// Route::get('/threads/{thread}', 'ThreadController@show');
// Route::get('/threads/create', 'ThreadController@create')->name('threads.create');
Route::resource('threads', 'ThreadController');
Route::resource('threads', 'ThreadController')->except([
    'index', 'show'
])->middleware('auth');

Route::post('/threads/{thread}/replies', 'ReplyController@store');
