<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailPreviewController extends Controller
{
    public function __invoke() {
        return "Ruta funcionando correctamente";
    }
}
