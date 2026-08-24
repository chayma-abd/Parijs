<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        // Check of de ingelogde gebruiker de eigenaar is van het profiel
        if (Auth::id() !== $user->id) {
            abort(403, 'Je hebt geen toegang om dit profiel te bewerken.');
        }
        
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        if (Auth::id() !== $user->id) {
            abort(403, 'Je hebt geen toegang om dit profiel te bewerken.');
        }
        
        // Validatie
        $request->validate([
            'username' => 'nullable|string|max:255',
            'birthday' => 'nullable|date',
            'about_me' => 'nullable|string|max:1000',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $user->username = $request->username;
        $user->birthday = $request->birthday;
        $user->about_me = $request->about_me;
        
        // Profielfoto uploaden
        if ($request->hasFile('profile_picture')) {
            // Oude foto verwijderen
            if ($user->profile_picture) {
                Storage::delete('public/' . $user->profile_picture);
            }
            
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }
        
        $user->save();
        
        return redirect()->route('profile.show', $user->id)->with('success', 'Profiel bijgewerkt!');
    }
}