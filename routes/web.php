<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuntionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Workcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('welcome');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('todo', TodoController::class);
    Route::get('/new', FuntionController::class) -> name('new');
    Route::post('/posts/store', [Postcontroller::class, 'store']) -> name('posts.store');
    Route::get('/work', Workcontroller::class) -> name('work');

});

Route::get('/posts/{postId}/show', [Postcontroller::class, 'show']) -> name('posts.show');


require __DIR__ . '/auth.php';
