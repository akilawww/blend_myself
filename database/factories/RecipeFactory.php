<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
       'user_id' => function(){
           return factory(App\User::class)->create()->id;
       },
       'title' => $faker->title,
       'body' => $faker->sentence(7),
       'image' => '',
    ];
});
