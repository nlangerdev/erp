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
    return view('pages.dashboard');
});


// Custom Routes to be added below this point //

// LESS Controller // 
Route::get('/Resources/LESS', ['uses' =>'Visual\LessController@Less']);