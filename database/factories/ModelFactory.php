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


$factory->define(App\Blog::class, function (Faker\Generator $faker) {
    return [
        'title' =>$faker->sentence(40),
        'views' =>$faker->numberBetween($min = 112, $max = 215),
        'share' =>$faker->numberBetween($min = 1, $max = 15),
        'like' =>$faker->numberBetween($min = 1, $max = 15),
        'tag' =>$faker->word,
        'image' =>$faker->imageUrl($width = 558, $height = 221),
        'details' => $faker->paragraph,
    ];
});

