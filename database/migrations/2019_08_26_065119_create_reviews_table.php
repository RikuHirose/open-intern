<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            
            $table->integer('user_id')->nullable();
            $table->integer('company_id')->nullable();

            $table->longtext('company_culture')->nullable();
            $table->longtext('gap')->nullable();
            $table->longtext('motivation')->nullable();
            $table->longtext('message')->nullable();

            $table->integer('education_environment')->nullable();
            $table->integer('openness')->nullable();
            $table->integer('marale')->nullable();
            $table->integer('growup_environment')->nullable();

            $table->string('open_flag');

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
        Schema::dropIfExists('reviews');
    }
}
