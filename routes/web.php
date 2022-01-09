<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\services\Orderform;
use Illuminate\Support\Facades\Route;

/* route::get('ping', function () {

    $jotformAPI = new JotForm(config("services.jotform.key"));

    $submission = $jotformAPI->getSubmission("5175480181019017091");

    return ddd($submission);
}); */

route::post('formorder', function () {

    try {
        $orderform = new Orderform();

        $result = $orderform->addOrder(request('firstname'), request('lastname'), request('fulladdress'), request('city'), request('phonenumber'), request('productname'));
    } catch (\Exception $e) {
        throw \illuminate\validation\ValidationException::withMessages([
            '1_first' => 'This details invalid'
        ]);
    }

    return ddd($result);
});


Route::get('/', [PostController::class, 'index'])->name('home');
route::get('/posts/{post:slug}', [PostController::class, 'show']);

route::post('newsletter', NewsletterController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware('admin')->name('dashboard');

require __DIR__ . '/auth.php';