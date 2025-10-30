<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => 1, 'name' => 'presidente', 'description' => 'Propietario y presidente de la comunidad'],
            ['id' => 2, 'name' => 'propietario', 'description' => 'Propietario de una casa de la comunidad'],
            ['id' => 3, 'name' => 'inquilino', 'description' => 'Arrendatario de una casa de la comunidad'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
