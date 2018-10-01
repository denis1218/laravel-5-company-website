<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'dental_defect' => $faker->randomElement(['MCR', 'mmd'])
    ];
});
