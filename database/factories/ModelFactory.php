<?php

use App\Habilidad;
use Illuminate\Support\Str;
use Faker\Generator as Faker;



$factory->define(Habilidad::class, function (Faker $faker) {
    return [
        'habilidad' => $faker->sentence
    ];
});
