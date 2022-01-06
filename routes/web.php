<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::post('newsletter', function () {

    request()->validate([
        'email' => 'required|email'
    ]);

    $mailchimp = new MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us20',
    ]);

    try {
        $mailchimp->lists->addListMember('fe9cf3f250', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    } catch (\Exception $e) {
        throw ValidationException::withmessages([
            'email' => 'This Email could not be subscribed'
        ]);
    }


    return redirect('/');
});

Route::get('/', [PostController::class, 'index'])->name('home');
route::get('/posts/{post:slug}', [PostController::class, 'show']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';