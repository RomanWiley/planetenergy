<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'isCompany' => $faker->boolean(50),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Thread::class, function(Faker $faker){
   return [
     'user_id' => function(){
        return factory('App\User')->create()->id;
     },
     'title' => $faker->sentence,
     'body' => $faker->paragraph,
     'category' => $faker->randomElement(['members','science','innovation']),
   ];
});
$factory->define(App\Reply::class, function(Faker $faker){
    return [
       'thread_id' => function(){
           return factory('App\Thread')->create()->id;
       },
       'user_id' => function(){
           return factory('App\User')->create()->id;
       },
       'body' => $faker->paragraph
    ];
});
