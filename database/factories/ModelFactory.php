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


//for users table
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//for blog table
$factory->define(App\Blog::class, function (Faker\Generator $faker) {
    return [
        'title' =>$faker->sentence(15),
        'views' =>$faker->numberBetween($min = 112, $max = 215),
        'share' =>$faker->numberBetween($min = 1, $max = 15),
        'like' =>$faker->numberBetween($min = 1, $max = 15),
        'tag' =>$faker->word,
        'image' =>$faker->imageUrl($width = 558, $height = 221),
        'img_thumbnail' =>$faker->imageUrl($width = 81, $height = 81),
        'details' => $faker->paragraph,
        'user_id' => 1,
        'meta_data' => $faker->unique()->word,
    ];
});

//for tags table
$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' =>$faker->word,
    ];
});