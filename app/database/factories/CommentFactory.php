<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'message' => $faker->sentence(),
        'updated_at' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
    ];
});
