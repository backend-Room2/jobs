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
Route::get('jobdetail/{id}/show',[PublicController::class,'show'])->name('jobs.show');
Route::get('joblist',[PublicController::class,'joblist'])->name('jobs.joblist');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('jobs.testimonial');
Route::get('page404',[PublicController::class,'page404'])->name('jobs.page404');

Route::get('jobs/index', [JobController::class,'index'])->name('jobs.index');
Route::get('jobs/{id}/show', [JobController::class,'show'])->withTrashed()->name('admin.jobs.show');
Route::get('jobs/create', [JobController::class,'create'])->name('jobs.create');
Route::post('jobs', [JobController::class,'store'])->name('jobs.store');
Route::get('jobs/{id}/edit', [JobController::class,'edit'])->name('jobs.edit');
Route::put('jobs/{id}',  [JobController::class, 'update'])->name('jobs.update');
Route::delete('jobs/{id}/delete',  [JobController::class,'destroy'])->name('jobs.destroy');
Route::get('jobs/trashed', [JobController::class,'showDeleted'])->name('jobs.showDeleted');
Route::patch('jobs/{id}', [JobController::class,'restore'])->name('jobs.restore');
Route::delete('jobs/{id}/forcedelete', [JobController::class,'forcedelete'])->name('jobs.forcedelete');
