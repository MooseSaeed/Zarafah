<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {

            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {

            throw ValidationException::withmessages([
                'email' => 'This Email could not be subscribed'
            ]);
        }

        return redirect('/');
    }
}