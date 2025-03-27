<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
})->middleware('age');

Route::get('/contact', function () {
    return view('contact');
})->middleware('user');

Route::get('/test', function () {
    return view('test');
})->middleware(['age', 'user']);


Route::get('/', function () {
    return view('index');
});

Route::get('/contact.html', function () {
    return Response::file(public_path('contact.html'));
});
