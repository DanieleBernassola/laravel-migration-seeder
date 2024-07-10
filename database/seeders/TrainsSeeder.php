<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->agency = $faker->company();
            $train->start_station = $faker->city();
            $train->end_station = $faker->city();
            $train->landing_hour = $faker->dateTimeBetween('- 1 week', '+ 1 week');
            $train->arrival_hour = $faker->dateTimeBetween('- 1 week', '+ 1 week');
            $train->train_code = $faker->bothify('??###');
            $train->n_cabs = $faker->numberBetween(2, 30);
            $train->in_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->save();
        }
    }
}
