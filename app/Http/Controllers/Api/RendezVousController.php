<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RendezVous;
use Illuminate\Support\Carbon;
class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezVous = RendezVous::with('patient')->get();

        return response()->json($rendezVous);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'date_heure' => 'required|date',
            'motif' => 'nullable|string|max:255',
            'status' => 'in:prévu,terminé,annulé',
        ]);

        $rdv = RendezVous::create($validated);

        return response()->json($rdv, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rendezVous = RendezVous::with('patient')->find($id);

        if (!$rendezVous) {
            return response()->json(['message' => 'RendezVous not found'], 404);
        }

        return response()->json($rendezVous);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rdv = RendezVous::find($id);

        if (!$rdv) {
            return response()->json(['message' => 'Rendez-vous non trouvé'], 404);
        }

        $validated = $request->validate([
            'patient_id' => 'sometimes|exists:patients,id',
            'date_heure' => 'sometimes|date',
            'motif' => 'nullable|string|max:255',
            'status' => 'in:prévu,terminé,annulé',
        ]);

        $rdv->update($validated);

        return response()->json($rdv);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezVous = RendezVous::find($id);

        if (!$rendezVous) {
            return response()->json(['message' => 'RendezVous not found'], 404);
        }

        $rendezVous->delete();

        return response()->json(['message' => 'RendezVous deleted successfully']);
    }
    public function aujourdhui()
    {
        $aujourdhui = Carbon::today()->toDateString(); 

        $rendezVous = RendezVous::whereDate('date_heure', $aujourdhui)->get();

        return response()->json($rendezVous);
    }
}
