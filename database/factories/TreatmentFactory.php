<?php
use Faker\Generator as Faker;
//use Illuminate\Support\Carbon;
$factory->define(\App\Treatment::class, function (Faker $faker) {
    $treatmentList = $faker->randomElement(['PF Parmanent Filling','RCT Root Canal','Extraction']);
    $dentalDefect = $faker->randomElement(['BDR','G-Carios','Atrision']);
//    $meridim = $faker->randomElement(['afternoon','morning']);
    $status_visit = $faker->randomElement(['complete','not complete']);
    $teeth_number = $faker->randomElement(['upper right','upper left', 'lower left','lower right']);
    return [
//        'teeth_number' => $faker->numberBetween(1,8),
//        'tooth_position' => $teeth_position,
        'treatment' => $treatmentList,
        'dentaldefect' => $dentalDefect,
//        'next_appointment' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
//        'meridiem' => $meridim,
        'visits' => $faker->numberBetween(1,5),
        'status_visits' => $status_visit,
        'status_pay' => $faker->boolean(30),
        'description' => $faker->text(30),
        'have_xray' => $faker->boolean(50),
        'estimated_fee' => $faker->numberBetween(1000,3000),
        'paid_amount' => $faker->numberBetween(1000,3000),
        'discount' => $faker->numberBetween(0,500),
        'patient_id' => $faker->numberBetween(1,9),
        'remaining_fee' => $faker->numberBetween(0,10),
        'created_at' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
    ];
});