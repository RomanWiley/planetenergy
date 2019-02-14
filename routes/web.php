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

Route::get('/loans', function () {
    return view('mainloans');
});;
Route::get('/subsidies', function () {
    return view('mainsubsidies');
});;
Route::get('/mainwebshop', function () {
    return view('mainwebshop');
});;
Route::get('/forum', function () {
    return view('mainforum');
});;
Route::get('/contact', function () {
    return view('contact');
});;
Route::get('/webshop', function () {
    return view('webshop');
});;
