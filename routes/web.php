<?php

use App\Http\Controllers\Admin\Dashboardcontroller as AdminDashboardcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuntionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\newpostcontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Workcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('welcome');
Route::get('/posts/{postId}/show', [Postcontroller::class, 'show']) -> name('posts.show');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/newPost', newpostcontroller::class)->name('newPost');
    Route::resource('todo', TodoController::class);
    Route::get('/new', FuntionController::class) -> name('new');
    //store is a method name inside Postcontroller
    Route::post('/posts/store', [Postcontroller::class, 'store']) -> name('posts.store');
    Route::get('/work', Workcontroller::class) -> name('work');
    Route::get('/posts/all', [DashboardController::class, 'allPosts']) -> name('posts.all');
    Route::get('/posts/{postId}/edit', [Postcontroller::class, 'edit']) -> name('posts.edit');
    Route::post('/posts/{postId}/update', [Postcontroller::class, 'update']) -> name('posts.update');
    Route::get('/posts/{postId}/delete', [Postcontroller::class, 'delete']) -> name('posts.delete');


});

 //Admin Routes
 Route::middleware('admin')->group(function () {

 Route::get('/admin/dashboard', [AdminDashboardcontroller::class, 'index']) -> middleware('admin') -> name('admin.dashboard');

});



require __DIR__ . '/auth.php';
