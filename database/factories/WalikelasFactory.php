<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Walikelas;
use Faker\Generator as Faker;

$factory->define(Walikelas::class, function (Faker $faker) {

    return [
        'idkelas' => $faker->randomDigitNotNull,
        'idguru' => $faker->randomDigitNotNull
    ];
});
