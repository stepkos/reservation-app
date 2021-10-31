<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert(['id' => 1,'role' => 'Patient']);
        \DB::table('roles')->insert(['id' => 2,'role' => 'Doctor']);


        $visit_types = [
            [
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
                'standard_duration' => 1
            ]
        ];


        \DB::table('visit_types')->insert($visit_types);

        

        // \App\Models\User::factory(10)->create();
    }
}
