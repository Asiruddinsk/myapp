<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [HomeController::class, 'Index']);
Route::get('/about', [HomeController::class, 'About']);
Route::get('/product', [HomeController::class, 'Product']);
Route::get('/contact', [HomeController::class, 'Contact']);
