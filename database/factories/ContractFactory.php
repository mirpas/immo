<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'flat_id' => $faker->numberBetween(1, 10),
        'start_date' => $faker->dateTimeThisDecade,
        'end_date' => null,
        'notice_period' => null,
        'unterschrift' => null,
    ];
});
