<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('search', [SearchController::class, 'search'])->name('search');
    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
        Route::get('index', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    });
});
