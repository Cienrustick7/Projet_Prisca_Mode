<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function modeles(string $id): View
    {
        return view('Models.Models', [
            'Models' => Models::findOrFail($id)
        ]);
    }
}


