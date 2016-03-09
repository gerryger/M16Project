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

$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'page' => 'l',
        'email' => $faker->email,
        'password' => str_random(10)
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'ev_name' => $faker->name,
        'ev_page' => 'l',
        'ev_place' => '',
        'ev_start' => $faker->date('Y-m-d'),
        'ev_end' => $faker->date('Y-m-d'),
        'ev_img' => '',
        'ev_desc' => $faker->paragraph
    ];
});
