<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;


class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookings = [
            [
                'date' => '2025-11-01',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'facility_id' => 1, // local 1
                'user_id' => 1,     // Juan
            ],
            [
                'date' => '2025-11-02',
                'start_time' => '14:00:00',
                'end_time' => '16:00:00',
                'facility_id' => 3, // padel 1
                'user_id' => 2,     // Ana
            ],
            [
                'date' => '2025-11-03',
                'start_time' => '09:00:00',
                'end_time' => '11:00:00',
                'facility_id' => 5, // piscina 1
                'user_id' => 3,     // Luis
            ],
        ];

        foreach ($bookings as $b) {
            Booking::create($b);
        }
    }
}
