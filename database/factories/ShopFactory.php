<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->word,
        'description' => $faker->text,
        'address' => $faker->word,
        'urlPageFacebook' => $faker->word,
        'urlPageInstagram' => $faker->word,
        'urlSite' => $faker->word,
        'CategoryShop_id' => factory(\App\CategoryShop::class),
        'user_id' => factory(\App\User::class),
    ];
});
