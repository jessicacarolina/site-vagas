<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Vacancy::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'level' => $faker->text,
        'category' => $faker->text,
        'technology' => $faker->text,
        'salary' => $faker->randomFloat(2, 10),
        'slug' => $faker->slug,

    ];
});
