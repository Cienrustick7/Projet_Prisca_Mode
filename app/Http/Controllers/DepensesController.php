<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Depenses;
use App\Models\Personnels;
use Illuminate\Http\Request;

class DepensesController extends Controller
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
    public function depenses()
    {
        $depenses = Depenses::all();
        return view('depense.depenses', compact('depenses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function form_depense()
    {
        $personnels = Personnels::all();
        return view('depense.ajout_depense', compact('personnels'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'libelle' => 'required',
            'montant' => 'required',
            'date' => 'required',
            'personnels_id'  => 'required',

        ]);

        $depenses = new Depenses();
        $depenses->libelle = $request->libelle;
        $depenses->montant = $request->montant;
        $depenses->date = $request->date;
        $depenses->personnels_id = $request->personnels_id;
        $depenses->save();

        return redirect()->route ('form_depense')->with('status', 'la depense a bien été ajouter avec succès');
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
