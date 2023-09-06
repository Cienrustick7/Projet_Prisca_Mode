<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouturesController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function coutures(string $id): View
    {
        return view('coutures.coutures', [
            'coutures' => coutures::findOrFail($id)
        ]);

}
}
