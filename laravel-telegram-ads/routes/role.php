<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

// Role Selection Route
Route::get('/role-selection', function () {
    return view('auth.role-selection');
})->name('role.selection');

Route::post('/role-update', [RoleController::class, 'update'])->name('role.update');

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Publisher Routes
Route::middleware(['auth', 'role:publisher'])->group(function () {
    Route::get('/publisher/dashboard', function () {
        return view('publisher.dashboard');
    })->name('publisher.dashboard');
});

// Advertiser Routes
Route::middleware(['auth', 'role:advertiser'])->group(function () {
    Route::get('/advertiser/dashboard', function () {
        return view('advertiser.dashboard');
    })->name('advertiser.dashboard');
});