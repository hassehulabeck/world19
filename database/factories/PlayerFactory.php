<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->firstNameFemale . " " . $faker->lastName,
        'gruppering' => $faker->numberBetween($min = 0, $max = 5),
        'team_id' => $faker->numberBetween($min = 1, $max = 24),
    ];
});
