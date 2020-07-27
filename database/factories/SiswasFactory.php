<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Siswas;
use Faker\Generator as Faker;

$factory->define(Siswas::class, function (Faker $faker) {

    return [
        'nis' => $faker->randomDigitNotNull,
        'iduser' => $faker->randomDigitNotNull,
        'idkelas' => $faker->randomDigitNotNull,
        'idprodi' => $faker->randomDigitNotNull,
        'tanggal_masuk' => $faker->word,
        'angkatan_thn' => $faker->word
    ];
});
