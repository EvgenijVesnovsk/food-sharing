<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\ProductCard;
use App\Models\User;
use App\Models\CardCategory;

$factory->define(ProductCard::class, function (Faker $faker) {
    return [
        'user_id' => User::pluck('id')->random(),
        'card_category_id' => CardCategory::pluck('id')->random(),
        'name' => $faker->sentence(5, false),
        'description' => $faker->paragraph(),
        'images' => [
            'https://loremflickr.com/348/255/food/all?r='.$faker->unique()->randomNumber(),
            'https://loremflickr.com/348/255/food/all?r='.$faker->unique()->randomNumber(),
            'https://loremflickr.com/348/255/food/all?r='.$faker->unique()->randomNumber(),
        ],
        'address' => $faker->address,
        'latitude' => $faker->latitude(35, 55),
        'longitude' => $faker->latitude(55, 60),

    ];
});
