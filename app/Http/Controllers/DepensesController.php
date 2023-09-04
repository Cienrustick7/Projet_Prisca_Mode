<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepensesController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(string $id): View
    {
        return view('depenses.depenses', [
            'depenses' => depenses::findOrFail($id)
        ]);

}
}

