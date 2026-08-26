<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->is_admin = true;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Gebruiker is nu admin!');
    }

    public function removeAdmin($id)
    {
        $user = User::findOrFail($id);
        
        // Voorkom dat je jezelf admin rechten afneemt
        if ($user->email === 'admin@ehb.be') {
            return redirect()->route('admin.users')->with('error', 'Je kunt jezelf geen admin rechten afnemen!');
        }
        
        $user->is_admin = false;
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Admin rechten verwijderd!');
    }
}