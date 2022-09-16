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
    return view('main', compact('data'));
})->name('series');

Route::get('/details/{id}', function ($id) {
    $products = config('comics');
    if (!is_numeric($id) || $id < 0 || $id >= count($products)) {
        abort(404);
    }
    $product = $products[$id];
    return view('details', compact('product'));
})->name('details');