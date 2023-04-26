<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Project as project;
use App\Models\Blog as blog;

Route::get('/', function () {
    $projects = project::get();
    return view('welcome', ['projects' => $projects]);
});

Route::get('projects', function () {
    $projects = project::get();
    return view('projects', ['projects' => $projects]);
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('blog', function () {
    $blog = blog::get();
    return view('blog', ['blog' => $blog]);
});


Route::get('readblog', function () {
    return view('readblog');
});

Route::get('viewproject', function () {
    return view('viewproject');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Blogs
Route::get('viewblog/{id}', [App\Http\Controllers\BlogController::class, 'viewblog'])->name('viewblog')->middleware('auth');
Route::get('addblog', [App\Http\Controllers\BlogController::class, 'createblog'])->name('addblog')->middleware('auth');
Route::post('storeblog', [App\Http\Controllers\BlogController::class, 'storeblog'])->name('storeblog')->middleware('auth');
Route::get('editblog/{id}', [App\Http\Controllers\BlogController::class, 'editblog'])->name('editblog')->middleware('auth');
Route::post('updateblog/{id}', [App\Http\Controllers\BlogController::class, 'updateblog'])->name('updateblog')->middleware('auth');


