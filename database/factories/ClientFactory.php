<?php

$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "vat" => $faker->name,
        "address" => $faker->name,
        "gender" => collect(["male","female",])->random(),
    ];
});
