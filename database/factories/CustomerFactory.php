<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\Customer::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
	'is_active' => $faker->boolean,
    ];
});

