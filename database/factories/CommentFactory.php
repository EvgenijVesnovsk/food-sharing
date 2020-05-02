<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Comment;
use App\Models\User;
use App\Models\ProductCard;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => User::pluck('id')->random(),
        'product_card_id' => ProductCard::pluck('id')->random(),
        'comment' => $faker->sentence(10, false),
    ];
});
