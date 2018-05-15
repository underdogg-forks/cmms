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
use App\User;


$factory->define(LaravelEnso\AddressesManager\app\Models\Address::class, function (Faker\Generator $faker) {

$user = User::find(1);
Auth::login($user);

 return [
        'addressable_type' => "App\WorkOrder",
        'addressable_id' => $faker->randomElement(\App\WorkOrder::pluck('id')->toArray()),
        'street' => $faker->name,
        'street_type' => 'Street',
        'number' => $faker->biasedNumberBetween($min = 0, $max = 140, $function = 'sqrt'),
        'postal_area' => $faker->postcode,
        'city' => $faker->city,
        'country_id' => 235,
        'created_by' => 1,
    ];
});

