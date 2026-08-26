<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();
        return view('attractions.index', compact('attractions'));
    }

    public function show($id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('attractions.show', compact('attraction'));
    }

    public function create()
    {
        return view('attractions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'detail' => 'required',
            'address' => 'required|max:255',
            'price' => 'required|max:100',
            'image' => 'nullable|image|max:2048',
        ]);

        $attraction = new Attraction();
        $attraction->name = $request->name;
        $attraction->description = $request->description;
        $attraction->detail = $request->detail;
        $attraction->address = $request->address;
        $attraction->price = $request->price;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $attraction->image = basename($path);
        }

        $attraction->save();

        return redirect()->route('attractions.index')->with('success', 'Bezienswaardigheid toegevoegd!');
    }

    public function edit($id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('attractions.edit', compact('attraction'));
    }

    public function update(Request $request, $id)
    {
        $attraction = Attraction::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'detail' => 'required',
            'address' => 'required|max:255',
            'price' => 'required|max:100',
            'image' => 'nullable|image|max:2048',
        ]);

        $attraction->name = $request->name;
        $attraction->description = $request->description;
        $attraction->detail = $request->detail;
        $attraction->address = $request->address;
        $attraction->price = $request->price;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $attraction->image = basename($path);
        }

        $attraction->save();

        return redirect()->route('attractions.index')->with('success', 'Bezienswaardigheid bijgewerkt!');
    }

    public function destroy($id)
    {
        $attraction = Attraction::findOrFail($id);
        $attraction->delete();

        return redirect()->route('attractions.index')->with('success', 'Bezienswaardigheid verwijderd!');
    }
}