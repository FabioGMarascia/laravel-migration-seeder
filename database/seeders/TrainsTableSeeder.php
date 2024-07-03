<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $newTrain = new Train();
            $newTrain->agency = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_Code = $faker->randomNumber(5, true);
            $newTrain->number_of_carriages = $faker->randomDigitNot(0, 1, 2, 3);
            $newTrain->in_time = $faker->randomElement(['yes', 'no']);
            if ($newTrain->in_time == 'yes') {
                $newTrain->deleted = 'no';
            } else {
                $newTrain->deleted = 'yes';
            }
            $newTrain->save();
        }
    }
}
