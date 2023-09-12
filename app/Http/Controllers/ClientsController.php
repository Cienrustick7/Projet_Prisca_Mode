<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
    public function clients()

    {
        $clients = Clients::all();

        return view('client.clients', compact('clients'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function form_client()
    {
        return view('client.ajout_client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ajouter_client_traitement (Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',

        ]);

        $clients = new Clients();
        $clients->nom_prenom = $request->nom_prenom;
        $clients->adresse = $request->adresse;
        $clients->telephone = $request->telephone;
        $clients->sexe = $request->sexe;
        $clients->save();

        return redirect()->route()->route('form_client')->with('status', 'le client a bien été ajouter avec succès');

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
