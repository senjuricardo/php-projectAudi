<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'country_id' => rand(1,100),
        'name' => $faker->name,
        'date_birth' => $faker-> date(),
    ];
});
