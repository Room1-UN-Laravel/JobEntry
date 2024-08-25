<?php

use App\Http\Controllers\PublicController;

use App\Http\Controllers\Admin\TestimonialController;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Public dashboard
Route::get('index',[TestimonialController::class,'LatestTestimonials'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');

Route::get('contact',[PublicController::class,'contact'])->name('contact');

Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');
Route::get('detail',[PublicController::class,'detail'])->name('detail');
//Admin dashboard
Route::get('job-list',[PublicController::class,'jobList'])->name('job-list');



