<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidature;
use App\Mail\CandidatureMail;
use Illuminate\Support\Facades\Mail;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'nom_complet' => 'required',
            'poste' => 'required',
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        $candidature = Candidature::create([
            'nom_complet' => $request->nom_complet,
            'poste' => $request->poste,
            'cv' => $cvPath,
        ]);

        // Envoyer l'email
        Mail::to('lomouhamedelbachir@gmail.com')->send(new CandidatureMail($candidature));

        return response()->json(['message' => 'Candidature envoyée avec succès'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
