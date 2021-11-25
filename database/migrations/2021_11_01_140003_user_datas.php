<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_datas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
            $table->timestamps();
        });

        Schema::table('user_datas', function (Blueprint $table){
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_datas', function(Blueprint $table) {
            $table->dropForeign([
                'role_id','id'
            ]);
        });
        Schema::dropIfExists('user_datas');
    }
}
