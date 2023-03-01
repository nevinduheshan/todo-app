<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
    echo 'hello wold';
});

Route::get('/', [HomeController::class, 'index']);
