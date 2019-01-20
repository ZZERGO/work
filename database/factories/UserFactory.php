<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'countries_id' => random_int(1, 3),
    ];
});

$factory->defineAs(\App\Models\User::class, 'admin', function (Faker $faker){
    $faker = \Faker\Factory::create('ru_RU');

    $gender = $faker->randomElements(['male', 'female'])[0];
    $firstName = ($gender == 'male') ? $faker->firstNameMale : $faker->firstNameFemale;
    $middleName = ($gender == 'male') ? $faker->middleNameMale : $faker->middleNameFemale;
    $lastName = ($gender == 'male') ? $faker->lastName : $faker->lastName . 'а';


    return [
        'name' => $faker->userName,
        'first_name' => $firstName,
        'middle_name' => $middleName,
        'last_name' => $lastName,
        'email' => $faker->email,
        'email_verified_at' => now(),
        'password' => bcrypt($faker->password(6, 8)),
        'remember_token' => str_random(10),
        'countries_id' => random_int(1, 3),
        'department_id' => random_int(1, 5),
        'phone_mobile' => $faker->phoneNumber,
        'gender' => $gender,
        'is_active' => random_int(0, 1),
        'birthday' => $faker->dateTimeBetween('-60 years', '-20 years'),
    ];
});
