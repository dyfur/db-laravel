<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolarSystem extends Model
{
    public $timestamps = false;

    public function planets()
    {
        return $this->hasMany(Planet::class);
    }
}
