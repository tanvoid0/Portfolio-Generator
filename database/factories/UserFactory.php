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
        'image' => 'https://randomuser.me/api/portraits/'.$faker->randomElement(['men', 'women']).'/'.rand(1,50).'.jpg',
        'designation' => $faker->word,
        'description' => $faker->paragraph,
        'dob' => $faker->date,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->streetAddress,
        'web' => $faker->url,
        'fb' => $faker->word,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'username' => $faker->unique()->word,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Education::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'institution' => $faker->name,
        'degree' => $faker->name,
         'start_year' => $faker->numberBetween(2010,2017),
         'end_year' => $faker->numberBetween(2011,2018),
        'gpa' => $faker->numberBetween(3,5),
        'scale' => $faker->numberBetween(4,5),
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,10),
        'role' => $faker->name,
        'company' => $faker->name,
        'start_year' => $faker->numberBetween(2010,2017),
        'end_year' => $faker->numberBetween(2010,2017),
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
        'image' => 'https://picsum.photos/id/'.rand(1,100).'/250/250',
        'category' => $faker->word,
        'description' => $faker->paragraph,
        'link' => $faker->url,
    ];
});