<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Todos;
$factory->define(App\Todos::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(2),
        'discription'=>$faker->text(100),
        'completed' =>false
    ];
});
