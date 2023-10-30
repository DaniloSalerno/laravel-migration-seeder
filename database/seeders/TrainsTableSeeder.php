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
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->start_station = $faker->city();
            $train->arrive_station = $faker->city();
            $train->start_time = $faker->time();
            $train->arrive_time = $faker->time();
            $train->train_code = $faker->bothify('??###?');
            $train->carriage_number = $faker->numberBetween(1, 10);
            $train->save();
        }
    }
}
