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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('about', 'AboutController@index')->name('about');

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/phpinfo', function () {
    return response()->json([
        'stuff' => phpinfo()
    ]);
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return View::make('pages.home');
})->name('home2');
Route::get('about', function () {
    return View::make('pages.about');
})->name('about');
Route::get('contact', 'ContactController@index'); // ->name('contact');
// Route::get('projects', function () {
//     return View::make('pages.projects');
// });
// Route::get('contact', function () {
//     return View::make('pages.contact');
// });
