<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
route::get('/posts/{post:slug}', [PostController::class, 'show']);

route::post('newsletter', NewsletterController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';