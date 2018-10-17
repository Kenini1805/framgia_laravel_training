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
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

//Tạo factory cho Product Model
$factory->define(App\Models\Product::class, function (Faker $faker) {
    $input = ['chai', 'cân', 'miếng', 'cái'];
    return [
        'product_name' => $faker->name,
        'price' => rand(1, 1000),
        'quantity' => rand(1, 100),
        'unit' => $input[array_rand($input)],
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'hot' => $faker->boolean(),
        'status' => $faker->boolean(),
    ];
});
