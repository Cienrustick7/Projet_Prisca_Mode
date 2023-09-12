<?php

namespace App\Http\Controllers;
use App\Models\Personnels;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function personnels()
    {
        return view('personnel.personnels');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form_personnel()
    {
        return view('personnel.ajout_personnel');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ajouter_personnel(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'type_personnel' => 'required',

        ]);

        $personnels = new Personnels();
        $personnels->nom_prenom = $request->nom_prenom;
        $personnels->adresse = $request->adresse;
        $personnels->telephone = $request->telephone;
        $personnels->type_personnel = $request->type_personnel;
        $personnels->save();

        return redirect()->route('form_personnel')->with('status', 'le personnel a bien été ajouter avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
