<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'content'=>$faker->text,
        'img_url'=>'images/fake1.jpg'
    ];
});
