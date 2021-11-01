<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkHoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }

    public function bindDoctor($id){
        return $this->state([
            'doctor_id' => $id,
            'beginMonday' => rand(6,11).':00:00',
            'endMonday' => rand(14,19).':00:00',
            'beginTuesday' => rand(6,11).':00:00',
            'endTuesday' => rand(14,19).':00:00',
            'beginWednesday' => rand(6,11).':00:00',
            'endWednesday' => rand(14,19).':00:00',
            'beginThursday' => rand(6,11).':00:00',
            'endThursday' => rand(14,19).':00:00',
            'beginFriday' => rand(6,11).':00:00',
            'endFriday' => rand(14,19).':00:00',
        ]);
    }
}
