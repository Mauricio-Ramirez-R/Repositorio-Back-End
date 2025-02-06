<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailPreviewController extends Controller
{
    public function __invoke() {
        dd(request()->all()); // 👈 Esto imprimirá los datos y detendrá la ejecución

        request()->validate([
            'customer' => ['required', 'string'],
            'email' => ['required', 'email'],
            'payment_method' => ['required', 'in:1,2,3'],
            'products' => ['required', 'array'],
            'products.*.name' => ['required', 'string', 'max:50'],
            'products.*.price' => ['required', 'numeric', 'gt:0'],
            'products.*.quantity' => ['required', 'integer', 'gte:1'],
        ]);

        return view('EmailPreview', request()->all());
    }
}
