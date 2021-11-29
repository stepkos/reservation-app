<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Facades\DB;

use App\Models\VisitType;


class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $doctors = DB::table('users')->where('role_id', '=', '2')->get();
        $patients = DB::table('users')->where('role_id', '=', '1')->get();
        $visit_type_count = count(VisitType::all());

        return [
            'patient_id' => $patients[rand(0, count($patients)-1)]->id,
            'doctor_id' => $doctors[rand(0, count($doctors)-1)]->id,
            'visit_type_id' => rand(1, $visit_type_count),
            'date' => $this->faker->dateTimeBetween('+0 days', '+2 years'),
            'description' => $this->faker->paragraph(),
            'approved_by_reception' => rand(0, 1) == 1
        ];
    }
}
