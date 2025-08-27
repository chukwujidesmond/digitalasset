<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThankYouController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/send-feedback', [ThankYouController::class, 'sendFeedback']) ->name('send.feedback');
