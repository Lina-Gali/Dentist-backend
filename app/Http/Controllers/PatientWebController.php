<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Api\PatientController;

class PatientWebController extends Controller
{
    public function index()
    {
        // Appel de l'API interne
        $response = Http::get(config('app.api_url') . '/api/patients');

        $patients = $response->json();

        return view('patients.index', compact('patients'));
    }
}
