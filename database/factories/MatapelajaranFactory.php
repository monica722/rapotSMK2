<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Matapelajaran;
use Faker\Generator as Faker;

$factory->define(Matapelajaran::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'semester' => $faker->word,
        'idguru' => $faker->randomDigitNotNull
    ];
});
