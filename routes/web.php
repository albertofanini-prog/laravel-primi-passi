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
    $home = 'Hello world';
    return view('home', compact('home'));
})->name('home');

Route::get('/info', function () {
    $info = 'Info about us';
    return view('info', compact('info'));
})->name('info');

Route::get('/prices', function () {
    $prices = 'Our prices';
    return view('prices', compact('prices'));
})->name('prices');

Route::get('/contacts', function () {
    $Contacts = 'Our contacts';
    return view('contacts', compact('contacts'));
})->name('contacts');