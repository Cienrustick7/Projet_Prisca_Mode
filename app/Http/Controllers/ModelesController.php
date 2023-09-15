<?php

namespace App\Http\Controllers;
use App\Models\Modeles;
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
        $modeles = Modeles::all();
        return view('modele.Modeles', compact('modeles'));
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
    public function store(Request $request)
    {
        $request->validate([
            'type_modele' => 'required',
            'nom_modele' => 'required',
            'image' => 'required',

        ]);

        $modeles = new Modeles();
        $modeles->type_modele = $request->type_modele;
        $modeles->nom_modele = $request->nom_modele;
        $modeles->image = $request->image->store('photo', 'public');
        $modeles->save();

        return redirect('form_modele')->with('status', 'le modele a bien été ajouter avec succès');
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
