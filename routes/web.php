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

// Route::resource('threads', 'ThreadController'); removed and replaced with lower two routes
Route::get('/ledenforum', function (App\Thread $thread) {
    return view('threads.index', ['threads' => App\Thread::latest()->where('category', 'members')->paginate(8)]);
});
Route::get('ledenforum/{thread}', 'ThreadController@show');

Route::resource('threads', 'ThreadController')->except([
    'index', 'show'
])->middleware('auth');

Route::get('/wetenschapforum', function (App\Thread $thread) {
    return view('sciencethreads.index', ['threads' => App\Thread::latest()->where('category', 'science')->paginate(8)]);
});
Route::get('wetenschapforum/{thread}', 'ThreadController@show');

Route::get('/innovatieforum', function (App\Thread $thread) {
    return view('innothreads.index', ['threads' => App\Thread::latest()->where('category', 'innovation')->paginate(8)]);
});
Route::get('innovatieforum/{thread}', 'ThreadController@show');


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
Route::get('/webshop', function () {
    return view('webshop');
});;
Route::get('/linkoverview', function () {
    return view('linkoverview');
});;
Route::get('/aanvraagsubsidie', function () {
    return view('aanvraagsubsidie');
});;
Route::get('/aanvraagbevestiging', function () {
    return view('aanvraagbevestiging');
});;

Route::resource('product', 'ProductController');
Route::resource('product', 'ProductController')->except([
    'index', 'show'
])->middleware('auth');


Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('/webshopcategory', function () {

    return view('webshopcategory');
});;

