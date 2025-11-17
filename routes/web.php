<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, World!';
})->name('root');

Route::get('about', [PageController::class, 'about'])->name('about');
