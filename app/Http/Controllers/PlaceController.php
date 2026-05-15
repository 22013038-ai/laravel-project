<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place;

class PlaceController extends Controller
{
    public function home()
    {
        $places = Place::all();

        return view('home', compact('places'));
    }

public function index()
{
    $places = Place::all();

    return view('places.index', compact('places'));
}

public function show($id)
{
    $place = Place::findOrFail($id);

    return view('places.show', compact('place'));
}
}