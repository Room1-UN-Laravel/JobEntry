<?php

use App\Http\Controllers\PublicController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');

Route::get('contact',[PublicController::class,'contact'])->name('contact');

Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
Route::get('detail',[PublicController::class,'detail'])->name('detail');
Route::get('job-list',[PublicController::class,'jobList'])->name('job-list');
<<<<<<< HEAD
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');

Route::get('contact',[PublicController::class,'contact'])->name('contact');
=======

>>>>>>> 241092a519a68dee9d90bb05ef0aa2994412b713

