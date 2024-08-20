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
Route::get('category',[PublicController::class,'category'])->name('category');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
Route::get('404',[PublicController::class,'four0four'])->name('Four0four');
Route::get('contact',[PublicController::class,'contact'])->name('Four0four');