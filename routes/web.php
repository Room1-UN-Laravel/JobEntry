<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Public dashboard
Route::get('index',[AdminController::class,'LatestTestimonials'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[AdminController::class,'testimonial'])->name('testimonial');
Route::get('detail',[PublicController::class,'detail'])->name('detail');


//Admin dashboard

