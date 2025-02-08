<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailPreviewController extends Controller
{
    public function __invoke(Request $request) {
        return response()->json(['message' => 'Ruta encontrada correctamente']);
    }
}
