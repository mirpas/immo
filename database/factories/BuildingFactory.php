<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Building;
use Faker\Generator as Faker;

$factory->define(Building::class, function (Faker $faker) {
    return [
        'building_type_id' => $faker->numberBetween(1, 3), // zu Testzwecken
        'short_name' => $faker->lexify('??'),
        'description' => $faker->company,
        'street' => $faker->streetName . ' ' . $faker->buildingNumber,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'flurnummer' => $faker->ean8,
        'no_of_floors' => $faker->numberBetween(1, 4),
        'din_area' => $faker->numberBetween(500, 900),
        'heated_area' => $faker->numberBetween(300, 600),
        'useable_area' => $faker->numberBetween(300, 800),
        'ground_area' => $faker->numberBetween(500, 999),
        'year_of_construction' => $faker->year,
        'year_of_last_renovation' => $faker->year,
    ];
});
