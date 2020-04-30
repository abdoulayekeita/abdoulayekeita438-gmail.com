<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(0, 0, 9999999999.),
        'isPriceNegotiate' => $faker->boolean,
        'isPossibleToChange' => $faker->boolean,
        'description' => $faker->text,
        'subCategoryProduct_id' => factory(\App\SubCategoryProduct::class),
    ];
});
