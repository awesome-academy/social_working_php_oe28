<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\Company;

$factory->define(User::class, function (Faker $faker, $role_id) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt(123456), // password
        'remember_token' => Str::random(10),
        'role_id' => $role_id,
    ];
});
