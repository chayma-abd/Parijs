<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.users');
Route::post('/admin/make/{id}', [App\Http\Controllers\AdminController::class, 'makeAdmin'])->name('admin.make');
Route::post('/admin/remove/{id}', [App\Http\Controllers\AdminController::class, 'removeAdmin'])->name('admin.remove');
Route::get('/faq', [App\Http\Controllers\FaqController::class, 'index'])->name('faq.index');

require __DIR__.'/auth.php';