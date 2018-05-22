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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Phone::class, function (Faker $faker) {
    

    return [
        'brand' => $faker->name,
        'logo' => $faker->word(),
        
    ];
});

$factory->define(App\Models\Model::class,  function (Faker $faker) {
    

    return [

        'name' => $faker->word(),
        'number' => $faker->randomNumber($nbDigits = NULL),
        'image' => $faker->imageUrl($width = 200, $height = 200),
        'category' =>  $faker->randomElement(['mini', 'tablet',
                         'pad', 'mega', 
                         'lite', 'Normal', 
                        ]),
        'os'=>$faker->randomElement(['KitKat', 'Jellybean',
                         'lollipop', 'beta', 
                         'alpha', 'icecream', 
                        ]),
        
        
    ];
});

$factory->define(App\Models\Problem::class,  function (Faker $faker) {
    

    return [
    	'type' => $faker->randomElement(['Software', 'Hardware',           
                        ]),
        'description'=>$faker->paragraph(),
        
        'topic' =>$faker->paragraph(),

    ];
});

$factory->define(App\Models\Solution::class,  function (Faker $faker) {
    

    return [

        
        'description'=>$faker->paragraph(),
        'image' =>$faker->word(),
        
    ];
});

$factory->define(App\Models\Comment::class,  function (Faker $faker) {
    

    return [

        
        'post'=>$faker->text(),
        
        
    ];
});

