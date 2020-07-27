<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kelas;
use Faker\Generator as Faker;

$factory->define(Kelas::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'idprodi' => $faker->randomDigitNotNull,
        'idwali_kelas' => $faker->randomDigitNotNull
    ];
});
