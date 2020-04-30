<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'product_id' => factory(\App\Product::class),
        'user_id' => factory(\App\User::class),
        'shop_id' => $faker->word,
        'published_at' => $faker->dateTime(),
    ];
});
