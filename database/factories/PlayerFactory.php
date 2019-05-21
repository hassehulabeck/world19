<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->femaleName,
        'birthday' => $faker->date($format='Y-m-d', $max='1990-01-01'),
        'country' => $faker->country,
    ];
});
