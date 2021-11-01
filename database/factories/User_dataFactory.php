<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class User_dataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => $this->faker->numerify('###-###-###'),
            'role_id' => rand(1,3)
        ];
    }
}
