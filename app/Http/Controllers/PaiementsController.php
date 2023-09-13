<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paiements;
use App\Models\Coutures;
class PaiementsController extends Controller
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
    public function paiements()
    {
        return view('paiement.paiements');

    }
     /**
     * Show the form for creating a new resource.
     */
    public function form_paiement()
    {
        $coutures = Coutures::all();

        return view('paiement.ajout_paiement', compact('coutures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'montant_payer' => 'required',
            'avance' => 'required',
            'reste' => 'required',
            'date_paiement' => 'required',
            'coutures_id'  => 'required',

        ]);

        $paiements = new Paiements();
        $paiements->montant_paiement = $request->montant_paiement;
        $paiements->avance = $request->avance;
        $paiements->reste = $request->reste;
        $paiements->date_paiement = $request->date_paiement;
        $paiements->coutures_id = $request->coutures_id;
        $paiements->save();

        return redirect()->route ('form_paiement')->with('status', 'le paiement a bien été ajouter avec succès');
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
