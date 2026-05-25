<?php

namespace App\Http\Controllers;

use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        return Planet::all();  
    }

    public function show($id)
    {
        return Planet::find($id);   
    }
}
?>
