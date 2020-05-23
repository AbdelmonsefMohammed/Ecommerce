<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Category;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,

    ];
});

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->unique()->sentence;
    return [
        'name' => $name,
        'slug' => strtolower(str_replace(' ','-',$name)),
        'details' =>$faker->sentence,
        'price' => $faker->randomElement([54,90,20,40,100,120]),
        'rating'=> $faker->randomElement([0,1,2,3,4,5]),
        'weight' => $faker->randomElement([50,100,150]),
        'description' => $faker->paragraph,
        'category_id' => Category::all()->random()->id,
    ];
});