<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->passenger_name = $faker->name;
            $newPassenger->passenger_surname = $faker->lastname;
            $newPassenger->passenger_seat = $faker->numberBetween(1, 1000);
            $newPassenger->save();
        }
    }
}
