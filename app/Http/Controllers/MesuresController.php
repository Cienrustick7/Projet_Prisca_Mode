<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MesuresController extends Controller
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
    public function mesures()
    {
        return view('mesure.mesures', compact('mesures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form_mesure()
    {
        $modeles = Modeles::all();
        $clients = Clients::all();
        return view('mesure.ajout_mesure', compact('modeles', 'clients'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function enregistrement_mesure(Request $request)
    {
        $request->validate([
            'tete' => 'required',
            'cou' => 'required',
            'epaule' => 'required',
            'longueur_de_bras' => 'required',
            'poitrine' => 'required',
            'tour_de_taille' => 'required',
            'longueur_du_corps' => 'required',
            'hanches' => 'required',
            'cuisse' => 'required',
            'genou' => 'required',
            'mollet' => 'required',
            'cheville' => 'required',
            'biceps' => 'required',
            'coude' => 'required',
            'avant_bras' => 'required',
            'poignet' => 'required',
            'poignet_coude' => 'required',
            'entrejambe' => 'required',
            'genou_cheville' => 'required',
            'couture_exterieure' => 'required',
            'hauteur_totale' => 'required',
            'clients_id' => 'required',
            'modeles_id' => 'required',
        ]);

        $mesures = new mesures();
        $mesures ->tete = $request->tete;
        $mesures ->cout= $request->cou;
        $mesures ->epaule = $request->epaule;
        $mesures ->longueur_de_bras = $request->longueur_de_bras;
        $mesures ->poitrine = $request->poitrine;
        $mesures ->montant = $request->montant;
        $mesures ->date_depot= $request->date_depot;
        $mesures ->date_recuperation = $request->date_recuperation;
        $mesures ->id_modeles = $request->id_modeles;
        $mesures ->clients_id = $request->clients_id;
        $mesures ->montant = $request->montant;
        $mesures ->date_depot= $request->date_depot;
        $mesures ->date_recuperation = $request->date_recuperation;
        $mesures ->id_modeles = $request->id_modeles;
        $mesures ->clients_id = $request->clients_id;
        $mesures ->montant = $request->montant;
        $mesures ->date_depot= $request->date_depot;
        $mesures ->date_recuperation = $request->date_recuperation;
        $mesures ->id_modeles = $request->id_modeles;
        $mesures ->clients_id = $request->clients_id;


        $coutures->save();

        return redirect()->route('enregistrement_mesure')->with('status', 'la couture a bien été ajouter avec succès');

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
