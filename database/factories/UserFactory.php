<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        'email' => $faker->safeEmail,
        'title' =>  $faker->name,
        'en_title' =>  $faker->name,
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'en_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'home_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'en_home_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'phone' => $faker->e164PhoneNumber,
        'address' =>$faker->address ,
        'facebook' => "https://www.facebook.com/",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/", //
        'video' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        'video2' =>"https://www.youtube.com/embed/AnBHcM-tZsM" ,
        'youtube' =>"https://www.youtube.com" ,
       // 'user_id' =>1 ,


    ];
});
