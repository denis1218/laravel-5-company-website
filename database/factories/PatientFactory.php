<?php

use Carbon\Carbon;
use Faker\Generator as Faker;


$factory->define(\App\Patient::class, function (Faker $faker) {
    $number = $faker->numberBetween(00000,99999);
    $status = $faker->randomElement(['first','second','third']);
    $gender = $faker->randomElement(['male','female']);
    $patient_id = 'P-0790'.$number;
    return [
        'id_patient' => $patient_id,
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'gender' => $gender,
        'age' => $faker->numberBetween(10,40),
        'phone'=> $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'next_appointment' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'problem_health' => $faker->realText(10),
        'status' => $status,
        'doctor_id' => $faker->numberBetween(1,3)
    ];
});
