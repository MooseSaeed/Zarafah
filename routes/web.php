<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderformController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

route::get('playground', function () {
    return view('playground');
});

route::post('formorder', OrderformController::class);

Route::get('/', [PostController::class, 'index'])->name('home');
route::get('/posts/{post:slug}', [PostController::class, 'show']);

route::post('newsletter', NewsletterController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware('admin')->name('dashboard');

route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('admin');
route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');

route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('admin');
route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');


require __DIR__ . '/auth.php';