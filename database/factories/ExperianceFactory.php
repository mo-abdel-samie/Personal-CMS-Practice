<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExperianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name'  => $this->faker->name,
            'position'  => $this->faker->randomElement(["FrontEnd", "BackEnd", "Full-Stack"]),
            'description' => $this->faker->sentence,
            'year' => random_int(2018, 2024),
        ];
    }
}
