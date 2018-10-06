<?php

use App\Doctor;
use Faker\Generator as Faker;

/**
 * $table->string('first_name');
$table->string('last_name');
$table->string('father_name');
$table->integer('age');
$table->time('start_work_time');
$table->time('end_work_time');
$table->string('phone');
$table->string('dept_id');
$table->string('gender');
$table->string('salary_type');
$table->integer('salary_amount');
$table->integer('max_patient');
 */
$factory->define(App\Doctor::class, function (Faker $faker) {
//    $gender = $faker->randomElements(['male', 'female']);
//    $salary_type = $faker->randomElements(['percentage', 'fix']);
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'father_name' => $faker->name,
        'age' => $faker->numberBetween(20,60),
        'start_work_time' => $faker->time('H:i:s'),
        'end_work_time' => $faker->time('H:i:s'),
        'phone' => $faker->phoneNumber,
        'department' => $faker->domainName,
        'gender' => $faker->name,
        'salary_type' => $faker->name,
        'salary_amount' => $faker->numberBetween(10000,20000),
        'max_patient' => $faker->numberBetween(5,20)
    ];
});
