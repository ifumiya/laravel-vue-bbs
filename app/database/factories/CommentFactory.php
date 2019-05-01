<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Comment;
use App\Model\Thread;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'message' => $faker->sentence(),
        'updated_at' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
        'thread_id' => function() {
            return factory(Thread::class)->create()->id;
        },
    ];
});
