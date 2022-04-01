

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'people_id' => rand(1,150),
        'name' => $faker->name,
        'color' => $faker->colorName,
        'dateOfBirth' => $faker->dateTimeBetween('1990-01-01', '2020-12-31')->format('Y/m/d')

    ];
});
