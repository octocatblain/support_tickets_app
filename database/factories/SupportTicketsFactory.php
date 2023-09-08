<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupportTickets>
 */
class SupportTicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'
echo $faker->email();
// 'walter.sophia@hotmail.com'
echo $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
