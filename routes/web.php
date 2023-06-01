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


Route::get('Adminproject',[HomeController::class,'Adminproject'])->name('Adminproject')->middleware('auth');
Route::get('CreateProject',[HomeController::class,'CreateProject'])->name('CreateProject')->middleware('auth');
Route::post('SaveCreateProject',[HomeController::class,'SaveCreateProject'])->name('SaveCreateProject')->middleware('auth');
Route::get('viewprojectAdmin/{id}',[HomeController::class,'viewprojectAdmin'])->name('viewprojectAdmin')->middleware('auth');
Route::get('EditProject/{id}',[HomeController::class,'EditProject'])->name('EditProject')->middleware('auth');
Route::post('saveEditedProject',[HomeController::class,'saveEditedProject'])->name('saveEditedProject')->middleware('auth');

Route::get('management',[HomeController::class,'management'])->name('management')->middleware('auth');
Route::post('saveStaff',[HomeController::class,'saveStaff'])->name('saveStaff')->middleware('auth');
Route::post('updatestaff/{id}',[HomeController::class,'updatestaff'])->name('updatestaff')->middleware('auth');
Route::get('deletestaff/{id}',[HomeController::class,'deletestaff'])->name('deletestaff')->middleware('auth');

Route::post('updatePartner',[HomeController::class,'updatePartner'])->name('updatePartner')->middleware('auth');
Route::post('changeContact',[HomeController::class,'changeContact'])->name('changeContact')->middleware('auth');

Route::get('deleteblog/{id}',[HomeController::class,'deleteblog'])->name('deleteblog')->middleware('auth');
Route::get('deleteproject/{id}',[HomeController::class,'deleteproject'])->name('deleteproject')->middleware('auth');
Route::get('deletepartner/{id}',[HomeController::class,'deletepartner'])->name('deletepartner')->middleware('auth');

//

