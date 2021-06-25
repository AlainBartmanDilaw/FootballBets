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

Route::get('About', function () {
    return View::make('pages.about');
})->name('about');

Route::get('Contact', 'ContactController@index');

Route::get('Logout', 'LoginController@logout');

Route::get('/', function () {
    $allMatchBet = DB::table('allmatchbet')->get();
//    \Log::info($allMatchBet->all());
    return view('pages.home', ['allMatchBet' => $allMatchBet]);
})->name('home');

Route::post('/ajax', 'AjaxController@ajax_call');

Route::get('Admin', 'AdminController@admin')
    ->middleware('isadmin');

Route::get('/scores', function () {
    $allMatch = DB::table('AllMatch')->get();
    return view('scores', ['allMatch' => $allMatch]);
})->name('scores');

// Mise à jour des scores réalisés (résultat du match)
Route::post('Resultat', 'AjaxController@resultat');
