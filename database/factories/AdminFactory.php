<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Admin;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'middle_name' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('ryanmags23'),
        'role' => $faker->randomElement(['TWG' ,'BAC']),
        'remember_token' => Str::random(10),
    ];
});
