<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->username,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'level' => $faker->randomElement(array_keys(App\Enums\UserLevel::LEVELS)),
        'email_verified_at' => now(),
        'password' => Hash::make('secret'),
        'remember_token' => str_random(10),
    ];
});
