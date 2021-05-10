<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'cli_rif'       => Str::random(10)->unique(),
        'cli_razon'     => $faker->name,
        'cli_dir'       => Str::random(10),
        'cli_telf1'     => Str::random(10),
    ];
});
