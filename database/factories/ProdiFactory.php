<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prodi;
use Faker\Generator as Faker;

$factory->define(Prodi::class, function (Faker $faker) {

    return [
        'idjurusan' => $faker->randomDigitNotNull,
        'nama' => $faker->word,
        'kode_label_prodi' => $faker->word,
        'kode_jurusan_prodi' => $faker->randomDigitNotNull
    ];
});
