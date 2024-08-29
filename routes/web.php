<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware ('verified');

Route::get('index', [PublicController::class, 'index'])->name('jobs.index');
Route::get('about', [PublicController::class, 'about'])->name('jobs.about');
Route::get('contact', [PublicController::class, 'contact'])->name('jobs.contact');
Route::get('category', [PublicController::class, 'category'])->name('jobs.category');
Route::get('jobdetail/{id}/show', [PublicController::class, 'show'])->name('jobs.show');
Route::get('joblist', [PublicController::class, 'joblist'])->name('jobs.joblist');
Route::get('testimonial', [PublicController::class, 'testimonial'])->name('jobs.testimonial');
Route::get('page404', [PublicController::class, 'page404'])->name('jobs.page404');
Route::get('jobcategories', [PublicController::class, 'jobscategories'])->name('jobs.jobscategories');

Route::prefix('admin')-> group(function () {
    Route::group([
        'prefix' => 'jobs',
        'middleware' => 'verified'
        ],function () {
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
        Route::get('', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('trashed', [CategoryController::class,'showDeleted'])->name('categories.showDeleted');
        Route::patch('{id}', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::delete('{id}/forcedelete', [CategoryController::class, 'forcedelete'])->name('categories.forcedelete');
    });
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
