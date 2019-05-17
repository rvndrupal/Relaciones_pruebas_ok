<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title=$faker->sentence(4);
    return [
        'user_id' => rand(1,6),
        'category_id' => rand(1,20),
        'name' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'file'=> $faker->imageUrl($width=1200, $height=400),
        'body' => $faker->text(200),
        'status' => $faker->randomElement(['DRAFT','PUBLISHED']),
    ];
});
