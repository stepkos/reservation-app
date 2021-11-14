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

        $random_number = rand(1,100);
        if($random_number < 70)
            $role_id = 1;
        else if($random_number > 70 && $random_number < 90)
            $role_id = 2;
        else
            $role_id = 3;

        return [
            'phone' => $this->faker->numerify('###-###-###'),
            'role_id' =>$role_id
        ];
    }
}
