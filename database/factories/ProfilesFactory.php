<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(\App\Profile::class, function (Faker $faker) {
    return [
        'name'       => $faker->sentence(3),
        'gender'     => $faker->randomElement(['male', 'female']), //the gender
        'phone'      => $faker->phoneNumber,
        'email'      => $faker->safeemail,
        'address'    => $faker->address,
        'nationality'=> $faker->randomElement([
                                'nepali', 'afghan', 'australian', 'chinese', 'indian'
                            ]),
        'dateofbirth'        => $faker->date($formate = 'Y-m-d', $max = 'now'),
         'education' => $faker->randomElement(['highschool', 'bacholor', 'degree']),
         'contact'   => $faker->phoneNumber   
    ];
});
