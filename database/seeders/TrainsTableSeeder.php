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
        $train->departure = $faker->word();
        $train->arrival = $faker->word();
        // alphanumeric
        $train->code = $faker->word();
        // small int
        $train->number_of_carriage = $faker->word();
        // boolean
        $train->running_on_time = $faker->word();
        $train->cancelled = $faker->word();
        // date
        $train->date_departure = $faker->word();
        $train->date_arrival = $faker->word();

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