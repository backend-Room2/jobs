<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('findjobs')->group(function () {
Route::get('', [PublicController::class, 'index'])->name('findjobs.index');
Route::get('about', [PublicController::class, 'about'])->name('findjobs.about');
Route::get('category', [PublicController::class, 'category'])->name('findjobs.category');
Route::get('joblist', [PublicController::class, 'joblist'])->name('findjobs.joblist');
Route::get('jobdetail', [PublicController::class, 'show'])->name('findjobs.show');
Route::get('testimonial', [PublicController::class, 'testimonial'])->name('findjobs.testimonial');
Route::get('contact', [PublicController::class, 'contact'])->name('findjobs.contact');
});

Route::prefix('jobs')->group(function () {
Route::get('', [JobController::class, 'index'])->name('jobs.index');  
Route::get('create', [JobController::class, 'create'])->name('jobs.create');
Route::get('', [JobController::class, 'store'])->name('jobs.store');


});
