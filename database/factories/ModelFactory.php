<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\CaseStudy::class, function (Faker\Generator $faker) {
    return [
        'client_name' => $faker->name,
        'about' => $faker->realText($faker->numberBetween(20,45)),
        'phase_one' => $faker->realText($faker->numberBetween(450,855)),
        'phase_two' => $faker->realText($faker->numberBetween(300,555)),
        'phase_three' => $faker->realText($faker->numberBetween(400,800))
    ];
});
