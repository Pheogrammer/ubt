<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Project as project;
use App\Models\Blog as blog;

use App\Http\Controllers\HomeController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('Adminblog',[HomeController::class,'blog'])->name('Adminblog')->middleware('auth');
Route::get('CreateBlog',[HomeController::class,'CreateBlog'])->name('CreateBlog')->middleware('auth');
Route::post('savePublishedBlog',[HomeController::class,'savePublishedBlog'])->name('savePublishedBlog')->middleware('auth');
Route::get('Viewblog/{id}',[HomeController::class,'Viewblog'])->name('Viewblog')->middleware('auth');
Route::get('editBlog/{id}',[HomeController::class,'editBlog'])->name('editBlog')->middleware('auth');
Route::post('saveeditedBlog',[HomeController::class,'saveeditedBlog'])->name('saveeditedBlog')->middleware('auth');

//

