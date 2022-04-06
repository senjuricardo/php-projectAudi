<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'country_id' => rand(1,150),
        'address' => $faker->address,
        'city' => $faker->city,
        'postal_code' => $faker->postcode,
    ];
});
