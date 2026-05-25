<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run()
    {
        DB::table('planets')->insert([
            [
                'name' => 'Mars',
                'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
                'size_in_km' => 6779,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
                'size_in_km' => 12104,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Earth',
                'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
                'size_in_km' => 12742,
                'solar_system_id' => 1
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
                'size_in_km' => 142984,
                'solar_system_id' => 1
            ],
        ]);
    }
}

?>