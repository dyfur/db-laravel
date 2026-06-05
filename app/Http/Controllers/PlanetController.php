<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('solarSystem')->get();
        return view('planets.index', compact('planets'));
    }

    public function show(Planet $planet)
    {
        return view('planets.show', compact('planet'));
    }
}
?>