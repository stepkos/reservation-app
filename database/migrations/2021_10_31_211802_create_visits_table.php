<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('visit_type_id');
            $table->dateTime('date', $precision=0);
            $table->text('description');
            $table->timestamps();
        });


        Schema::table('visits', function (Blueprint $table) {
            $table->foreign('patient_id')->references('id')->on('users');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->foreign('visit_type_id')->references('id')->on('visit_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits', function(Blueprint $table) {
            $table->dropForeign([
                'patient_id', 'doctor_id', 'visit_type_id'
            ]);
        });
        
        Schema::dropIfExists('visits');
    }
}
