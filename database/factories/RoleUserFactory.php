<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RoleUser;
use Faker\Generator as Faker;

$factory->define(RoleUser::class, function (Faker $faker) {

    return [
        'role_id' => $faker->randomDigitNotNull
    ];
});
