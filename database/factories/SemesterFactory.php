<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Semester;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {

    return [
        'semester' => $faker->randomDigitNotNull,
        'tahunsemester' => $faker->word
    ];
});
