<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mesures;
use App\Models\Modeles;
use App\Models\Clients;

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
    {    $mesures = Mesures::all();
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
    public function store(Request $request)
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

        $mesures = new Mesures();
        $mesures ->tete = $request->tete;
        $mesures ->cout= $request->cou;
        $mesures ->epaule = $request->epaule;
        $mesures ->longueur_de_bras = $request->longueur_de_bras;
        $mesures ->poitrine = $request->poitrine;
        $mesures ->tour_de_taille = $request->tour_de_taille;
        $mesures ->longueur_du_corps= $request->longueur_du_corps;
        $mesures ->hanches = $request->hanches;
        $mesures ->cuisse = $request->cuisse;
        $mesures ->genou = $request->genou;
        $mesures ->mollet = $request->mollet;
        $mesures ->cheville= $request->cheville;
        $mesures ->biceps = $request->biceps;
        $mesures ->coude = $request->coude;
        $mesures ->avant_bras = $request->avant_bras;
        $mesures ->poignet = $request->poignet;
        $mesures ->poignet_coude= $request->poignet_coude;
        $mesures ->entrejambe = $request->entrejambe;
        $mesures ->genou_cheville = $request->genou_cheville;
        $mesures ->couture_exterieure = $request->couture_exterieure;
        $mesures ->hauteur_totale = $request->hauteur_totale;
        $mesures ->clients_id = $request->clients_id;
        $mesures ->modeles_id = $request->modeles_id;



        $mesures->save();

        return redirect()->route('form_mesure')->with('status', 'les mesures a bien été ajouter avec succès');

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
