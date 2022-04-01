<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'dateOfBirth' => $faker->dateTimeBetween('1990-01-01', '2020-12-31')->format('Y/m/d'),
    ];
});
