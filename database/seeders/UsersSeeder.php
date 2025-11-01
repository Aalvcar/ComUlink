<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [ [
                'name' => 'Antonio',
                'surname' => 'Álvarez Cárdenas',
                'email' => 'neo_alvarez@hotmail.com',
                'password' => Hash::make('alv3438n'),
                'address' => 'Calle Falsa 456',
                'phone' => 600123000,
                'birth_date' => '1987-03-20',
                'role_id' => 2, // propietario
            ],
            [
                'name' => 'Juan',
                'surname' => 'Pérez',
                'email' => 'juan@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Calle Falsa 123',
                'phone' => 600123456,
                'birth_date' => '1990-05-20',
                'role_id' => 1, // presidente
            ],
            [
                'name' => 'Ana',
                'surname' => 'García',
                'email' => 'ana@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Calle Real 45',
                'phone' => 600654321,
                'birth_date' => '1985-09-12',
                'role_id' => 2, // propietario
            ],
            [
                'name' => 'Luis',
                'surname' => 'Martínez',
                'email' => 'luis@example.com',
                'password' => Hash::make('password123'),
                'address' => 'Avenida Central 7',
                'phone' => 600987654,
                'birth_date' => '1995-01-10',
                'role_id' => 3, // inquilino
            ],
        ];

        foreach ($users as $u) {
            User::create($u);
        }
    }
}
