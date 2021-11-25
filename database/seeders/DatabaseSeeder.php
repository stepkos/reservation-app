<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $visit_types = [[
                'type' => 'Konsultacja',
                'standard_duration' => 1
            ],[
                'type' => 'Wstawianie plomby',
                'standard_duration' => 1
            ],[
                'type' => 'Hemisekcja',
                'standard_duration' => 2
            ],[
                'type' => 'Kortykotomia',
                'standard_duration' => 3
            ],[
                'type' => 'Skaling',
                'standard_duration' => 1
            ],[
                'type' => 'Lakowanie',
                'standard_duration' => 1]];

        \DB::table('roles')->insert(['role' => 'Patient']);
        \DB::table('roles')->insert(['role' => 'Doctor']);
        \DB::table('roles')->insert(['role' => 'Reception']);
        \DB::table('visit_types')->insert($visit_types);

        

        $user_number = 50;

        \App\Models\User::factory($user_number)->create();
        // \App\Models\User_data::factory($user_number)->create();
        \App\Models\Visit::factory(rand($user_number+10,$user_number*2))->create();

        $doctors = DB::table('users')->where('role_id', '=', '2')->get();
        foreach($doctors as $doctor)
            \App\Models\WorkHours::factory()->bindDoctor($doctor->id)->create();
        
            

    }
}
