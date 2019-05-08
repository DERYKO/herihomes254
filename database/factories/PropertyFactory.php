<?php

use App\User;
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

$factory->define(\App\Property::class, function (Faker $faker) {
    $apartments=[
        "https://www.buyrentkenya.com/uploadedfiles/79/b8/30/79b8300f-4276-41e4-a1a7-71afbeb606be.jpg",
        "https://www.buyrentkenya.com/uploadedfiles/27/67/74/27677479-304b-4f71-84d5-18298271da79.jpg",
        "https://www.buyrentkenya.com/uploadedfiles/d9/58/e9/d958e94a-cd58-48ad-95e3-0ed931c24442.jpg",
        "https://www.buyrentkenya.com/uploadedfiles/37/67/87/37678755-2a07-4cc2-ae17-73c3ee45ec8f.jpg",
        "https://www.buyrentkenya.com/uploadedfiles/65/74/8e/65748e47-4e8c-48d5-8496-a48e669ceb30.jpg",
        "https://www.buyrentkenya.com/uploadedfiles/91/dd/1c/91dd1c01-78e9-4398-823e-6d8acc92dd28.jpg"
    ];
    $status=[
       'sale',
        'rent'
    ];
    return [
        'name' => $faker->name,
        'imageUrl' => $apartments[array_rand($apartments)],
        'address' => $faker->address,
        'status'=>$status[array_rand($status)],
        'user_id' => 2,
    ];
});