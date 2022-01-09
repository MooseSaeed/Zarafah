<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderformController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

route::get('admin/posts/create', [PostController::class, 'create']);
route::post('/admin/posts', [PostController::class, 'store']);

route::post('formorder', OrderformController::class);

Route::get('/', [PostController::class, 'index'])->name('home');
route::get('/posts/{post:slug}', [PostController::class, 'show']);

route::post('newsletter', NewsletterController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware('admin')->name('dashboard');

require __DIR__ . '/auth.php';