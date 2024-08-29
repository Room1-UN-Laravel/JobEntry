
<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\jobsController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)->group(function(){
    Route::get('categories/create','create')->name('categories.create');
    Route::post('categories','store')->name('categories.store');
    Route::get('categories','index')->name('categories.index');
    Route::get('categories/{id}/edit','edit')->name('categories.edit')->whereNumber('id');
    Route::put('categories/{id}','update')->name('categories.update');
    Route::delete('categories/{id}','destroy')->name('categories.destroy');
});

//Route::resource('categories', CategoryController::class);

Route::controller(jobsController::class)->group(function(){
    Route::get('jobs/create','create')->name('jobs.create');
    Route::post('jobs','store')->name('jobs.store');
    Route::get('jobs','index')->name('jobs.index');
    Route::get('jobs/{id}/edit','edit')->name('jobs.edit')->whereNumber('id');
    Route::put('jobs/{id}','update')->name('jobs.update');
    Route::delete('jobs/{id}','destroy')->name('jobs.destroy');
});

Route::controller(TestimonialController::class)->group(function(){
    Route::get('testimonials/create','create')->name('testimonials.create');
    Route::post('testimonials','store')->name('testimonials.store');
    Route::get('testimonials','index')->name('testimonials.index');
    Route::get('testimonials/{id}/edit','edit')->name('testimonials.edit')->whereNumber('id');
    Route::put('testimonials/{id}','update')->name('testimonials.update');
    Route::delete('testimonials/{id}','destroy')->name('testimonials.destroy');
});

Route::controller(UserController::class)->group(function(){
    Route::get('users/create','create')->name('users.create');
    Route::post('users','store')->name('users.store');
    Route::get('users','index')->name('users.index');
    Route::get('users/{id}/edit','edit')->name('users.edit')->whereNumber('id');
    Route::put('users/{id}','update')->name('users.update');
    Route::delete('users/{id}','destroy')->name('users.destroy');
});