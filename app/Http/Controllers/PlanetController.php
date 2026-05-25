<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        return Planet::with('solarSystem')->get();  
    }

    public function show($id)
    {
        return Planet::with('solarSystem')->find($id); 
    }
}
?>
