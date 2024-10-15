<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', \App\Http\Controllers\ShowDashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/polling', \App\Http\Controllers\Polling\ShowPollingController::class)->middleware(['auth', 'verified'])->name('polling');

Route::get('/pre-fetching', \App\Http\Controllers\PreFetch\ShowPrefetchingController::class)->middleware(['auth', 'verified'])->name('pre-fetching');
Route::get('/pre-fetching/users', \App\Http\Controllers\PreFetch\ShowPreFetchedUsersController::class)->middleware(['auth', 'verified'])->name('pre-fetching.users');

Route::get('/defer', \App\Http\Controllers\Defer\ShowDeferredPropsController::class)->middleware(['auth', 'verified'])->name('defer');

Route::get('/when-visible', \App\Http\Controllers\WhenVisible\ShowWhenVisibleController::class)->middleware(['auth', 'verified'])->name('when-visible');

Route::get('/infinite-scrolling', \App\Http\Controllers\InfiniteScrolling\ShowInfiniteScrollingController::class)->middleware(['auth', 'verified'])->name('infinite-scrolling');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
