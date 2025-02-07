<?php

use App\Http\Controllers\EmailPreviewController;
use Illuminate\Support\Facades\Route;

Route::get('/email-preview', EmailPreviewController::class);

