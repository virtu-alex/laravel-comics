<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('series');

Route::get('/main', function () {
    $data = config('comics');
    // dd($data);
    return view('main', compact($data));
})->name('series');

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/contacts', function () {
//     return view('contacts');
// })->name('contacts');
