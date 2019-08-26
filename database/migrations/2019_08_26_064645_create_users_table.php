<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('furigana')->nullable();

            $table->integer('phone_number')->unique()->nullable();

            $table->dateTime('birthday')->nullable();

            $table->string('male')->nullable();
            $table->string('address')->nullable();
            $table->string('career_status')->nullable();
            $table->string('school_status')->nullable();
            $table->string('school_name')->nullable();
            $table->string('faculty')->nullable();
            $table->string('graduate_plan');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
