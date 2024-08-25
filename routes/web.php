<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Public dashboard
Route::get('index',[TestimonialController::class,'LatestTestimonials'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[TestimonialController::class,'testimonial'])->name('testimonial');
Route::get('detail',[PublicController::class,'detail'])->name('detail');


//Admin dashboard

