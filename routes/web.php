<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionController;
use App\Models\Attraction;

Route::get('/', function () {
    $attractions = Attraction::all();
    return view('home', compact('attractions'));
});

Route::get('/dashboard', function () {
    return view('userzone.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/attractions', [AttractionController::class, 'index'])->name('attractions.index');
Route::get('/attractions/create', [AttractionController::class, 'create'])->name('attractions.create');
Route::post('/attractions', [AttractionController::class, 'store'])->name('attractions.store');
Route::get('/attractions/{id}', [AttractionController::class, 'show'])->name('attractions.show');
Route::get('/attractions/{id}/edit', [AttractionController::class, 'edit'])->name('attractions.edit');
Route::put('/attractions/{id}', [AttractionController::class, 'update'])->name('attractions.update');
Route::delete('/attractions/{id}', [AttractionController::class, 'destroy'])->name('attractions.destroy');

Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
Route::post('/admin/make/{id}', [AdminController::class, 'makeAdmin'])->name('admin.make');
Route::post('/admin/remove/{id}', [AdminController::class, 'removeAdmin'])->name('admin.remove');

require __DIR__.'/auth.php';