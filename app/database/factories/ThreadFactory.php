<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'message' => $faker->text(),
        'title' => $faker->sentence(),
        'updated_at' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
    ];
});
