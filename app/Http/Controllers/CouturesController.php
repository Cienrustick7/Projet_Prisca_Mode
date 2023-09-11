<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coutures;

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
     * Store a newly created resource in storage.
     */
    public function ajouter_couture(Request $request)
    {
        $request->validate([
            'montant' => 'required',
            'date_depot' => 'required',
            'date_recuperation' => 'required',
            'models_id' => 'required',
            'clients_id' => 'required',


        ]);

        $coutures = new Coutures();
        $coutures->montant = $request->motant;
        $coutures->date_depot = $request->date_depot;
        $coutures->date_recuperation = $request->date_recuperation;
        $coutures->models_id = $request->models_id;
        $coutures->clients_id = $request->clients_id;
        $coutures->save();

        return redirect()->route('form_couture')->with('status', 'la couture a bien été ajouter avec succès');

    }



    /**
     * Store a newly created resource in storage.
     */
    public function form_couture(Request $request)
    {
        return view('couture.ajout_couture');

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
