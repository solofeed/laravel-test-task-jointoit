<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Company;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name'    => $faker->name,
        'website' => $faker->domainName,
        'logo'    => $faker->imageUrl(),
        'email'   => $faker->email,
    ];
});
