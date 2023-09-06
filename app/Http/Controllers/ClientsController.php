<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function Clients(string $id): View
    {
        return view('Clients.Clients', [
            'Clients' => Clients::findOrFail($id)
        ]);
    }
}
