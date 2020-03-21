<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word(2, true),
        'description' => $faker->sentence,
        'slug' => $faker->slug,
    ];
});
