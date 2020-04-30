<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubCategoryProduct;
use Faker\Generator as Faker;

$factory->define(SubCategoryProduct::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'CategoryProduct_id' => factory(\App\CategoryProduct::class),
    ];
});
