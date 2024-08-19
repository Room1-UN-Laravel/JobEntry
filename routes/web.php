<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
