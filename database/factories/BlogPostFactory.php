<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Blog\BlogPost::class, function (Faker $faker) {

    //$faker = \Faker\Factory::create('ru_RU');

    $title = $faker->sentence(6, true);
    $isPublished = rand(0, 1);

    return [
        'user_id' => random_int(1, 10),
        'categories_id' => random_int(1, 10),
        'title' => $title,
        'slug' => str_slug($title),
        'short_text' => $faker->text(50),
        'full_text' => $faker->realText(150, 2),
        'is_published' =>$isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-30 days', '-5 days') : null,
        'created_at' => $faker->dateTimeBetween('-40 days', '-33 days'),
        'updated_at' => $faker->dateTimeBetween('-33 days', '-30 days'),
    ];
});
