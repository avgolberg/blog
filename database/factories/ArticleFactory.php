<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1,7),
        'title' => $faker->text(35),
        'body' => $faker->text(1500),
        'image' => $faker->imageUrl(750,300)
    ];
});
