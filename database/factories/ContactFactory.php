<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'building_id' => $faker->numberBetween(1, 3),
        'flat_id' => $faker->numberBetween(1, 5),
        'company' => $faker->company,
        'company_extra' => null,
        'company_ceo' => null,
        'prename' => $faker->firstName,
        'surname' => $faker->lastName,
        'birth_name' => null,
        'gender' => null,
        'nationality' => 'deutsch',
        'day_of_birth' => null,
        'phone' => null,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'iban' => $faker->iban('DE'),
        'bic' => $faker->bank,
        'tax_id' => null,
        'street' => $faker->streetName . ' ' . $faker->buildingNumber,
        'street_extra' => null,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
    ];
});
