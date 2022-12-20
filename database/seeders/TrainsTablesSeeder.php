<?php

namespace Database\Seeders;

//adding Models and Faker
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            // $train->... = $faker->...;
            $train->company = $faker->sentence(2, false);
            $train->departure_station = $faker->city();
            $train->arrival_station =  $faker->city();
            $train->departure_day =  $faker->date();
            $train->departure_time =  $faker->time();
            $train->arrival_day = $faker->date();
            $train->arrival_time = $faker->time();
            $train->code_train = $faker->bothify('######');
            $train->wagon_number = $faker->numberBetween(1, 10);
            $train->save();
        }
    }
}
