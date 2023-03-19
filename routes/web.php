<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('blog', function () {
    return view('blog');
});


Route::get('readblog', function () {
    return view('readblog');
});

Route::get('viewproject', function () {
    return view('viewproject');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

