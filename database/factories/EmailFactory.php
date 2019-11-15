<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use App\User;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'sender_id'=>random_int(1 , User::count()),
        'receiver_id'=>random_int(1 , User::count()),
        'subject'=>$faker->text,
        'message'=>$faker->text,
        'status_id'=>random_int(1, 4),
        'thread_id'=>0
    ];
});
