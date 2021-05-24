<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'original_title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'nationality' => $faker -> country,
        'date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'vote' => $faker -> randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
    ];
});
