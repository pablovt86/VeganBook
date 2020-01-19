<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'textarea' => $faker->textarea,
      'body' => $faker->realText(400)
    ];
  });