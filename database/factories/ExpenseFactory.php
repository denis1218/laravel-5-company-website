<?php

use App\Expense;
use Faker\Generator as Faker;

$factory->define(Expense::class, function (Faker $faker) {
    $catagory = $faker->randomElement(['rent','office supply','personal','tax','employee','misc']);

    return [
        'receiver' => $faker->name,
        'amount' => $faker->numberBetween(10,1000),
        'category' => $catagory,
        'description' => $faker->text,
        'created_at' => \Carbon\Carbon::today()
    ];
});
