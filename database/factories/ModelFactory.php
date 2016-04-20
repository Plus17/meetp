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
        'email' => $faker->unique()->email,
        'role' => 'user',
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement(['Congreso', 'MeetUp', 'Somposio', 'Flisol']),
    ];
});
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text($maxNbChars = 200),
        'start' => \Carbon\Carbon::now(),
        'end' => \Carbon\Carbon::now(),
        'place' => $faker->state,
        'description' => $faker->paragraph,
        'status' => $faker->randomElement(['active', 'finished', 'canceled']),
        'category_id' => random_int(\DB::table('categories')->min('id'), \DB::table('categories')->max('id')),
        'user_id' => random_int(\DB::table('users')->min('id'), \DB::table('users')->max('id'))
    ];
});
