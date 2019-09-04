<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ToDo;
use Faker\Generator as Faker;

$factory->define(ToDo::class, function (Faker $faker) {
    return [
       'name' => $faker->sentence(3),
       'description' => $faker->paragraph(4),
       'completed' => false,

    ];
});
