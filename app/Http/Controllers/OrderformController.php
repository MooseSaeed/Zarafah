<?php

namespace App\Http\Controllers;

use App\services\Orderform;
use Illuminate\Validation\ValidationException;

class OrderformController extends Controller
{
    public function __invoke(Orderform $orderform)
    {
        request()->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'fulladdress' => 'required',
            'city' => 'required|string',
            'productname' => 'required|string'
        ]);

        try {

            $orderform->addOrder(request('firstname'), request('lastname'), request('fulladdress'), request('city'), request('phonenumber'), request('productname'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                '1_first' => 'This details invalid'
            ]);
        }

        flash('Your order has been submitted');

        return back();
    }
}