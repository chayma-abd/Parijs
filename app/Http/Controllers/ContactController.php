<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');
    }

    public function send(Request $request)
    {
        return redirect()->route('contact.show')->with('success', 'Je bericht is verstuurd!');
    }
}