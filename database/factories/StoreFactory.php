<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'owner_name' =>$faker->company,
        'email' => $faker->unique()->safeEmail,
        'store_name' => $faker->unique()->sentence,
        'store_address' => $faker->name,
        'phone' => $faker->unique()->phoneNumber,
        'store_logo' =>$faker->image,
        'url' => $faker->url,
        'created_by' => $faker->DateTime,
        'updated_by' => $faker->DateTime,
    ];
});
