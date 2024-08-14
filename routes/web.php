<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('findjobs')->group(function () {
Route::get('', [JobController::class, 'index'])->name('findjobs.index');
Route::get('about', [JobController::class, 'about'])->name('findjobs.about');
Route::get('category', [JobController::class, 'category'])->name('findjobs.category');
Route::get('joblist', [JobController::class, 'joblist'])->name('findjobs.joblist');
Route::get('jobdetail', [JobController::class, 'show'])->name('findjobs.show');
Route::get('testimonial', [JobController::class, 'testimonial'])->name('findjobs.testimonial');
Route::get('contact', [JobController::class, 'contact'])->name('findjobs.contact');

});