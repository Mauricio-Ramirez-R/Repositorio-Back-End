<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailPreviewController extends Controller
{
    public function __invoke():view{
        request()->validate(rules:[
            'customer' => ['required', 'string'],
            'email' => ['required', 'email'],
            'payment_method' => ['required', 'in:1,2,3'],
            'products' => ['required', 'array'],
            'products.*.name' => ['required', 'string', 'max:50'],
            'products.*.price' => ['required', 'numeric', 'gt:0'],
            'products.*.quantity' => ['required', 'integer','gte:1'],
        ]);

        $request = request()->all();

    }
}
