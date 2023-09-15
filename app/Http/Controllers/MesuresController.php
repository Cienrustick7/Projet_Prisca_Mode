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
        mesures::create($request->all());


        return redirect()->route('form_mesure')->with('status', 'les mesures a bien été ajouter avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function details(mesures $mesures)
    {
       return view('mesure.details', compact('mesures'));
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
