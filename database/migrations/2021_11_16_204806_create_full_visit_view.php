<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullVisitView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        DB::statement("DROP VIEW IF EXISTS full_visit_view;"); 

        // tak wiem że to skomplikowane zapytania, ale prościej się nie dało przy takich relacjach :)
        DB::statement("create view full_visit_view as 
        
            select id1 as 'visit_id', patient, patient_id, doctor, doctor_id, date, description, approved_by_reception, type, standard_duration
            from 
                (select visits.id as 'id1', users.name as 'patient' , users.id as 'patient_id'
                from visits 
                inner join users 
                on visits.patient_id = users.id) as s1
            inner join 
                (select visits.id as 'id2', users.name as 'doctor', users.id as 'doctor_id',visits.date, visits.description, visits.approved_by_reception, visit_types.type, visit_types.standard_duration
                from visits 
                inner join users 
                on visits.doctor_id = users.id
                inner join visit_types
                on visits.visit_type_id = visit_types.id
                ) as s2
            on s1.id1 = s2.id2 order by s1.id1;


        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  DB::statement("DROP IF EXISTS VIEW full_visit_view");
    }
}
