<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Raport;
use Faker\Generator as Faker;

$factory->define(Raport::class, function (Faker $faker) {

    return [
        'idsiswa' => $faker->randomDigitNotNull,
        'idmapel' => $faker->randomDigitNotNull,
        'idsemester' => $faker->randomDigitNotNull,
        'total_nilai_tugas' => $faker->randomDigitNotNull,
        'nilai_uts' => $faker->randomDigitNotNull,
        'nilai_uas' => $faker->randomDigitNotNull,
        'bobot_nilai' => $faker->word,
        'predikat' => $faker->word
    ];
});
