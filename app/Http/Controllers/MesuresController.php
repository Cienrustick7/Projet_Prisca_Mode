<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesuresController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('Mesures.Mesures', [
            'Mesures' => Mesures::findOrFail($id)
        ]);
    }
}
