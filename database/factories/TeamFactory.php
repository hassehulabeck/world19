<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'gruppering' => $faker->numberBetween($min = 100, $max = 103),
        'grupp' => $faker->randomElement($array = array ('A','B','C', 'D', 'E', 'F')),
    ];
});
