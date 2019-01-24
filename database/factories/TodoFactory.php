<?php

use App\User;

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => User::all()->random()->id
    ];
});
