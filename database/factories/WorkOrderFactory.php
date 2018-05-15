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

$factory->define(App\WorkOrder::class, function (Faker\Generator $faker) {

    return [
        'subject' => $faker->sentence,
        'description' => $faker->text,
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
        'scheduled' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
	'customer_id' => $faker->randomElement(\App\Customer::pluck('id')->toArray()),
	'contractor_id' => $faker->randomElement(\App\Contractor::pluck('id')->toArray()),
	'status_id' => $faker->randomElement(\App\Status::pluck('id')->toArray()),
	'priority_id' => $faker->randomElement(\App\Priority::pluck('id')->toArray()),
	'is_active' => $faker->boolean,
    ];
});

