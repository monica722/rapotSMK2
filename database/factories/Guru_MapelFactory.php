<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Guru_Mapel;
use Faker\Generator as Faker;

$factory->define(Guru_Mapel::class, function (Faker $faker) {

    return [
        'nip' => $faker->randomDigitNotNull,
        'iduser' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
