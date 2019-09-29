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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/phpinfo', function () {
    return response()->json([
        'stuff' => phpinfo()
    ]);
});


// Route::get('/home', 'HomeController@index')->name('home');

Route::get('about', function () {
    return View::make('pages.about');
})->name('about');

Route::get('contact', 'ContactController@index'); // ->name('contact');

Route::get('test', function () {
    return View::make('pages.test');
})->name('test');

Route::get('test2', function () {
    return View::make('pages.test2');
});

//Route::get('welcome2', function () {
//    return View::make('pages.welcome2');
//})->name('welcome2');

Route::get('welcome', function () {
    return View::make('pages.welcome');
})->name('welcome');

Route::get('logout', 'LoginController@logout');

Route::get('home', function () {
    $allMatchBet = DB::table('AllMatchBet')->get();
    \Log::info($allMatchBet->all());
    return view('home', ['allMatchBet' => $allMatchBet]);
})->name('home');

Route::get('/', function () {
    $allMatchBet = DB::table('AllMatchBet')->get();
    \Log::info($allMatchBet->all());
    return view('home', ['allMatchBet' => $allMatchBet]);
})->name('home');

Route::post('/ajax', 'AjaxController@ajax_call');
