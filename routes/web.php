<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\http\Middleware\Admin;

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

Route::get('/home', [AdminController::class, 'Admin'])->middleware(['admin', 'auth']);
Route::get('/catagory', [AdminController::class, 'Catagory'])->middleware(['admin', 'auth']);
Route::post('/add-catagory', [AdminController::class, 'add_catagory'])->middleware(['admin', 'auth']);
Route::get('/edit/{id}', [AdminController::class, 'edit_catagory'])->middleware(['admin', 'auth']);
Route::post('/edit-catagory/{id}', [AdminController::class, 'edit_catagory_confirm'])->middleware(['admin', 'auth']);
Route::get('/delete/{id}', [AdminController::class, 'delete_catagory'])->middleware(['admin', 'auth']);



