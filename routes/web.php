<?php

use App\Http\Controllers\EmailPreviewController;
use Illuminate\Support\Facades\Route;

Route::post('/email-preview', EmailPreviewController::class);
