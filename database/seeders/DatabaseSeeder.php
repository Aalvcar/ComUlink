<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RolesSeeder::class,
            FacilitiesSeeder::class,
            UsersSeeder::class,
            ProposalsSeeder::class,
            ServicesSeeder::class,
            BookingsSeeder::class,
            IssuesSeeder::class,
            VotesSeeder::class,
            AnnouncementsSeeder::class,
        ]);
    }
}
