<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->departure_station = $faker->city;
            $newTrain->arrival_station = $faker->city;
            $departureDate = $faker->dateTimeBetween('now', '2025-01-31');
            $newTrain->departure_date = $departureDate->format('Y-m-d');
            $newTrain->departure_time = $departureDate->format('H:i:s');
            $newTrain->arrival_time = $faker->dateTimeBetween(
                $departureDate,
                date('Y-m-d H:i:s', strtotime('+12 hours', $departureDate->getTimestamp()))
            )->format('H:i:s');
            $newTrain->train_code = $faker->unique()->numerify('TR-####');
            $newTrain->number_of_carriages = $faker->numberBetween(1, 20);
            $newTrain->on_time = $faker->boolean;
            $newTrain->cancelled = $faker->boolean(20);
            $newTrain->save();
        }
    }
}
//     $table->bigIncrements('id');
//         $table->string('company', 150);
//         $table->string('departure_station', 150);
//         $table->string('arrival_station', 150);
//         $table->date('departure_date');
//         $table->time('departure_time');
//         $table->time('arrival_time');
//         $table->string('train_code', 10);
//         $table->unsignedTinyInteger('number_of_carriages');
//         $table->boolean('on_time')->default(true);
//         $table->boolean('cancelled')->default(false);
//         $table->timestamps();