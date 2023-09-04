<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rendez-vousController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('rendez_vous.rendez_vous', [
            'rendez-vous' => rendez-vous::findOrFail($id)
        ]);

}
}

