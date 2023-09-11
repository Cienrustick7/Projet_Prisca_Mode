<?php

namespace App\Http\Controllers;
use App\Models\Coutures;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouturesController extends Controller
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
    public function coutures()
    {
        return view('couture.coutures');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form_couture()
    {
        return view('couture.ajout_couture');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function enregistrement_couture (Request $request)
    {
        $request->validate([
            'montant' => 'required',
            'date_depot' => 'required',
            'date_recuperation' => 'required',
            'id_clients' => 'required',
            'id_modeles' => 'required',
        ]);

        $coutures = new coutures();
        $coutures->montant = $request->montant;
        $coutures->date_depot= $request->date_depot;
        $coutures->date_recuperation = $request->date_recuperation;
        $coutures->id_modeles = $request->id_modeles;
        $coutures->clients_id = $request->clients_id;

        $coutures->save();

        return redirect()->route('enregistrement_couture')->with('status', 'la couture a bien été ajouter avec succès');

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
