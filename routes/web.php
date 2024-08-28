<?php

use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PublicController::class, 'index'])->name('jobs.index');
Route::get('about', [PublicController::class, 'about'])->name('jobs.about');
Route::get('contact', [PublicController::class, 'contact'])->name('jobs.contact');
Route::get('category', [PublicController::class, 'category'])->name('jobs.category');
Route::get('jobdetail/{id}/show', [PublicController::class, 'show'])->name('jobs.show');
Route::get('joblist', [PublicController::class, 'joblist'])->name('jobs.joblist');
Route::get('testimonial', [PublicController::class, 'testimonial'])->name('jobs.testimonial');
Route::get('page404', [PublicController::class, 'page404'])->name('jobs.page404');

Route::prefix('admin')->group(function () {
    Route::prefix('jobs')->group(function () {
        Route::get('', [JobController::class, 'index'])->name('jobs.index');
        Route::get('{id}/show', [JobController::class, 'show'])->withTrashed()->name('admin.jobs.show');
        Route::get('create', [JobController::class, 'create'])->name('jobs.create');
        Route::post('', [JobController::class, 'store'])->name('jobs.store');
        Route::get('{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
        Route::put('{id}', [JobController::class, 'update'])->name('jobs.update');
        Route::delete('{id}/delete', [JobController::class, 'destroy'])->name('jobs.destroy');
        Route::get('trashed', [JobController::class, 'showDeleted'])->name('jobs.showDeleted');
        Route::patch('{id}', [JobController::class, 'restore'])->name('jobs.restore');
        Route::delete('{id}/forcedelete', [JobController::class, 'forcedelete'])->name('jobs.forcedelete');
    });
    
    Route::prefix('categories')->group(function () {
        Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('', [CategoryController::class, 'store'])->name('categories.store');
    });
});