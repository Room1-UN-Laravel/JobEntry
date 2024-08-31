<?php

use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\PublicController;

use App\Http\Controllers\Admin\TestimonialController;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Public dashboard
Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('job/detail',[PublicController::class,'jobDetail'])->name('detail');
Route::get('job/list',[PublicController::class,'jobList'])->name('job-list');



Route::get('job-list',[PublicController::class,'jobList'])->name('job-list');
Route::get('jobs',[PublicController::class,'jobs'])->name('jobs');

Route::get('testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');



// Auth::routes();
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
