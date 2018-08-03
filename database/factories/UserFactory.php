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

$factory->define(App\BitcoinLite::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'rate_btc' => $faker->randomFloat(2, 0.00000000, 0.99999999),
        'buy_rate_btc' => $faker->randomFloat(2,0.01,100),
        'sell_rate_btc' => $faker->randomFloat(2,0.01,100),
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {
    
    return [
        

        'order_id' => $faker ->word,
        'user_id' => $faker-> unique()->safeEmail,
        'lite_bought' => $faker->randomFloat(2,0.01,100),
        'cost_btc' => $faker->randomFloat(2,0.01,100),
        'order_state' => $faker ->word,
    ];
});