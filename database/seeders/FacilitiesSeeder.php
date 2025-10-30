<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;


class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $facilities = [
            ['name' => 'Local 1', 'description' => 'Local de Fernando bajo el bloque F', 'capacity' => 50],
            ['name' => 'Sala 1', 'description' => 'Sala común del jardín', 'capacity' => 16],
            ['name' => 'Padel 1', 'description' => 'Pista de padel', 'capacity' => 4],
            ['name' => 'Padel 2', 'description' => 'Pista de padel cubierta', 'capacity' => 4],
            ['name' => 'Piscina 1', 'description' => 'Piscina grande de adultos', 'capacity' => 80],
            ['name' => 'Futbol 1', 'description' => 'Campo de fútbol 7', 'capacity' => 18],
        ];

        foreach ($facilities as $f) {
            Facility::create($f);
        }
    }
}
