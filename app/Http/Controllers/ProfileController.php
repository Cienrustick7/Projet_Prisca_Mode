<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function clients(Request $request): View
    {
        return view('profile.clients', [
            'user' => $request->user(),
        ]);
    }


    public function form_client(Request $request): View
    {
        return view('profile.ajout_client', [
            'user' => $request->user(),
        ]);
    }

    public function mesures(Request $request): View
    {
        return view('profile.mesures', [
            'user' => $request->user(),
        ]);
    }

    public function Modeles(Request $request): View
    {
        return view('profile.Modeles', [
            'user' => $request->user(),
        ]);
    }

    public function paiements(Request $request): View
    {
        return view('profile.paiements', [
            'user' => $request->user(),
        ]);
    }

    public function coutures(Request $request): View
    {
        return view('profile.coutures', [
            'user' => $request->user(),
        ]);
    }

    public function personnels(Request $request): View
    {
        return view('profile.personnels', [
            'user' => $request->user(),
        ]);
    }
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
