<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientWebController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/patients', [PatientWebController::class, 'index']);