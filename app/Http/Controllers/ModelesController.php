<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelesController extends Controller
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
    public function Modeles()
    {
        return view('modele.Modeles');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_modele(Request $request)
    {
        return view('modele.ajout_modele');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function ajouter_modele(Request $request)
    {
        $request->validate([
            'type_modele' => 'required',
            'nom_modele' => 'required',
            'image' => 'required',

        ]);

        $modeles = new Modeles();
        $modeles->type_modeles = $request->type_modeles;
        $modeles->nom_modeles = $request->nom_modeles;
        $modeles->image = $request->image;
        $clients->save();

        return redirect('ajout_modele')->with('status', 'le modele a bien été ajouter avec succès');
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
