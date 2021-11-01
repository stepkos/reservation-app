<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->time('beginMonday');
            $table->time('endMonday');
            $table->time('beginTuesday');
            $table->time('endTuesday');
            $table->time('beginWednesday');
            $table->time('endWednesday');
            $table->time('beginThursday');
            $table->time('endThursday');
            $table->time('beginFriday');
            $table->time('endFriday');
            $table->timestamps();
        });

        Schema::table('work_hours', function(Blueprint $table){
            $table->foreign('doctor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_hours', function(Blueprint $table) {
            $table->dropForeign([
                'doctor_id'
            ]);
        });
        Schema::dropIfExists('work_hours');
    }
}
