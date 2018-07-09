<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'designation' => $faker->word,
        'description' => $faker->paragraph,
        'dob' => $faker->date,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->streetAddress,
        'web' => $faker->url,
        'fb' => $faker->word,
        'username' => $faker->unique()->word,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'role' => $faker->name,
        'company' => $faker->name,
        // 'start_year' => $faker->date,
        // 'end_year' => $faker->date,
        'description' => $faker->paragraph,
    ];
});
$factory->define(App\Skill::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'name' => $faker->name,
        'percentage' => rand(30,90),
    ];
});
$factory->define(App\Work::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'title' => $faker->name,
        'category' => $faker->name,
        'description' => $faker->paragraph,
        'link' => $faker->url,
    ];
});