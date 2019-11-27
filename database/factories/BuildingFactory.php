<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Building;
use Faker\Generator as Faker;

$factory->define(Building::class, function (Faker $faker) {
    return [
            'short_name' => $faker->company,
            'description' => $faker->company,
            'street' => $faker->streetName . ' ' . $faker->buildingNumber,
            'zip' => $faker->postcode,
            'city' => $faker->city,
            'flurnummer' => $faker->ean8,
            'ground_area' => $faker->numberBetween(500, 999),
            'building_area' => $faker->numberBetween(150, 499),
            'year_of_construction' => $faker->year,
            'year_of_last_renovation' => $faker->year,
            'path_to_energieausweis' => null,
            'building_type_id' => 1,

    ];
});
