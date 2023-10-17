<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 20; $i++){

        $train = new Train();

        // company
        $train->company = $faker->words(3,true);
        // places
        $train->station_from = $faker->word();
        $train->station_to = $faker->word();
        // time
        $train->departure = $faker->time();
        $train->arrival = $faker->time();
        // alphanumeric
        $train->code = $faker->isbn10();
        // small int
        $train->number_of_carriage = $faker->numberBetween(4,12);
        // boolean
        $train->running_on_time = $faker->randomElement([0,1]);
        $train->cancelled = $faker->randomElement([0,1]);
        // date
        $train->date_departure = $faker->dateTimeThisMonth('+3 days');
        $train->date_arrival = $faker->dateTimeThisMonth('+4 days');

        // examples

        // $train->genre = $faker->word();
        // $train->plot = $faker->paragraph();
        // $train->publishing_year = $faker->year();
        // $train->pages = $faker->numberBetween(30,999);
        // $train->price = $faker->randomFloat(2, 5, 70);


        $train->save();
}
    }
}