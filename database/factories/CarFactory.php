<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

 $randCar = [
    "Mercedes","Ferrari","Ford","Mazda",
];

$factory->define(Car::class, function (Faker $faker) use ($randCar) {
    return [
        'player_id' => rand(1,100),
        'name' => $randCar[array_rand($randCar)],
        'color' => $faker-> colorName,
    ];
});
