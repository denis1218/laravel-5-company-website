<?php

use Faker\Generator as Faker;


$factory->define(\App\Patient::class, function (Faker $faker) {
    return [
        'id_patient' => $faker->uuid,
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'gender' => $faker->colorName,
        'age' => $faker->numberBetween(10,40),
        'phone'=> $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'problem_health' => $faker->realText(10),
        'status' => $faker->city,
        'doctor_id' => $faker->numberBetween(1,3)
    ];
});
