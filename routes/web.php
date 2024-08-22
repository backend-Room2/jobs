<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\JobController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PublicController::class,'index'])->name('jobs.index');
Route::get('about',[PublicController::class,'about'])->name('jobs.about');
Route::get('contact',[PublicController::class,'contact'])->name('jobs.contact');
Route::get('category',[PublicController::class,'category'])->name('jobs.category');
Route::get('jobdetail/show/{id}',[PublicController::class,'show'])->name('jobs.show');
Route::get('joblist',[PublicController::class,'joblist'])->name('jobs.joblist');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('jobs.testimonial');
Route::get('page404',[PublicController::class,'page404'])->name('jobs.page404');

Route::get('jobs/index', [JobController::class,'index'])->name('jobs.index');
Route::get('jobs/create', [JobController::class,'create'])->name('jobs.create');
Route::post('jobs', [JobController::class,'store'])->name('jobs.store');