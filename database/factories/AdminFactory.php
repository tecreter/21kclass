<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Back\Settings\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => 'ADMIN',
        'username' => 'tocadmin',
        //'name' => $faker->name,
        //'username' => $faker->unique()->userName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'enable_flag' => 1,
        'is_master' => 'y'
    ];
});
