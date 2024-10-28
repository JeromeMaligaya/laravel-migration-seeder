<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factoty as Faker;


class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newPassenger = new Passenger();
        $newPassenger->faker->numberBetween(1, 1000);
        $newPassenger->save();
    }
}
