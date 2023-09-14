<?php

namespace App\Http\Controllers;
use App\Models\Rendez_vous;
use App\Models\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rendez_vousController extends Controller
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
    public function rendez_vous()
    {
        $rendez_vous = Rendez_vous::all();
        return view('rv.rendez_vous', compact('rendez_vous'));
    }


     /**
     * Show the form for creating a new resource.
     */
    public function form_rendez_vous()
    {
        $clients = Clients::all();
        return view('rv.ajout_rendez_vous', compact('clients'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'Date_rdv' => 'required',


        ]);

        $rendez_vous = new Rendez_vous();
        $rendez_vous->libelle = $request->libelle;
        $rendez_vous->date_rdv = $request->date_rdv;
        $rendez_vous->save();



        return redirect()->route('form_rendez_vous')->with('status', 'le rendez_vous a bien été ajouter avec succès');

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
