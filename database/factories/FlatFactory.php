<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Flat;
use Faker\Generator as Faker;

$factory->define(Flat::class, function (Faker $faker) {
    return [
        'flat_type_id' => 1, // zu Testwecken
        'building_id' => 2, // zu Testwecken
        'short_name' => $faker->company,
        'description'=> $faker->company,
        'floor' => $faker->numberBetween(1, 4),
        'no_of_rooms' =>$faker->numberBetween(1, 4),
        'din_area' => $faker->numberBetween(50, 150),
        'living_area' => $faker->numberBetween(50, 150),
        'heated_area' => $faker->numberBetween(30, 140),
        'useable_area' => $faker->numberBetween(50, 160),
        'balcony_area' => $faker->numberBetween(3, 20),
        'year_of_last_renovation' => $faker->year,
        'built_in_kitchen' => $faker->numberBetween(0, 1),
        'weg_mieteigentumsanteil' => $faker->numberBetween(0, 1),
        'weg_kopfstimmen' => $faker->numberBetween(1, 4),
        'weg_hausgeld' => $faker->numberBetween(100, 500),
    ];
});
