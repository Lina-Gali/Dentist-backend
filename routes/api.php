<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\RendezVousController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('patients')->group(function () {
    Route::get('/', [PatientController::class, 'index']);
    Route::post('/', [PatientController::class, 'store']);
    Route::get('{id}', [PatientController::class, 'show']);
    Route::put('{id}', [PatientController::class, 'update']);
    Route::delete('{id}', [PatientController::class, 'destroy']);
});
Route::prefix('rendezvous')->group(function () {
    Route::get('/aujourdhui', [RendezVousController::class, 'aujourdhui']);
    Route::get('/', [RendezVousController::class, 'index']);
    Route::post('/', [RendezVousController::class, 'store']);
    Route::get('{id}', [RendezVousController::class, 'show']);
    Route::put('{id}', [RendezVousController::class, 'update']);
    Route::delete('{id}', [RendezVousController::class, 'destroy']);
});
