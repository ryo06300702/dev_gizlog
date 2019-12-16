<?php

use Faker\Generator as Faker;

$factory->define(App\Models\DailyReport::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'content' => $faker->name,
        'reporting_time' => $faker->dateTimeThisYear,
        'user_id' => '1',
    ];
});
