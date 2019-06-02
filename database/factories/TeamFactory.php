<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'abbreviation' => $faker->randomletter . $faker->randomletter,
        'gruppering' => $faker->numberBetween($min = 1, $max = 4),
        'about' => $faker->text(100),
        'grupp' => $faker->randomElement($array = array ('A','B','C', 'D', 'E', 'F')),
    ];
});
