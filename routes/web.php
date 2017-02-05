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
use App\Mail\KryptoniteFound;

Route::get('/', function () {
    // send an email to "batman@batcave.io"
    Mail::to('antonystefano8806@yandex.com')->send(new KryptoniteFound);

    return view('welcome');
});

// Route::get('/', function () {
//     return view('welcome');
// });
