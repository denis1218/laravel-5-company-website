<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'treatment' => $faker->randomElement(['mahdi','hassan']),
        'estimated_fee' => $faker->numberBetween(1000,5000)
    ];
});
