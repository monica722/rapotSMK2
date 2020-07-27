<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PermissionRole;
use Faker\Generator as Faker;

$factory->define(PermissionRole::class, function (Faker $faker) {

    return [
        'role_id' => $faker->randomDigitNotNull
    ];
});
