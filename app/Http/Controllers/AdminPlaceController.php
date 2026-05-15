<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place;

class AdminPlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();

        return view('admin.places.index', compact('places'));
    }

    public function create()
    {
        return view('admin.places.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);

        Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address
        ]);

        return redirect('/admin/places');
    }

    public function edit($id)
    {
        $place = Place::find($id);

        return view('admin.places.edit', compact('place'));
    }

    public function update(Request $request, $id)
    {
        $place = Place::find($id);

        $place->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address
        ]);

        return redirect('/admin/places');
    }

    public function delete($id)
    {
        $place = Place::find($id);

        $place->delete();

        return redirect('/admin/places');
    }
} 
?>
