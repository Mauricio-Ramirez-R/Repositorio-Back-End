<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailPreviewController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Vista previa del email']);
    }
}
