<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

// Public pages
Route::get('/', [LeaderboardController::class, 'index'])->name('home');
Route::get('/sport/{slug}', [LeaderboardController::class, 'sport'])->name('sport.show');

// Authentication
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Member area
Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Admin area
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('participants', App\Http\Controllers\Admin\ParticipantController::class);
    Route::resource('sports', App\Http\Controllers\Admin\SportController::class)->except(['show']);
});
