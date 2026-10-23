<?php

use App\Http\Controllers\CameraController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CameraController::class, 'index'])->name('cameras.index');
Route::get('/kamera/{camera}', [CameraController::class, 'show'])->name('cameras.show');
Route::get('/cara-sewa', [CameraController::class, 'rentalGuide'])->name('pages.rental-guide');
Route::get('/tentang', [CameraController::class, 'about'])->name('pages.about');
Route::get('/faq', [CameraController::class, 'faq'])->name('pages.faq');
Route::get('/kontak', [CameraController::class, 'contact'])->name('pages.contact');

