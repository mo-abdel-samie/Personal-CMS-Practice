<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'  => $this->faker->name,
            'role'  => $this->faker->randomElement(['Web Developer', 'FrontEnd', 'BackEnd']),
            'image' => 'images/profile.jpg',
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'aboute_me' => $this->faker->sentence,
        ];
    }
}
