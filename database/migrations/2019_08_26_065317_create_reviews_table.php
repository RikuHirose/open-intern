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
            
            $table->bigInteger('user_id')->unique()->unsigned()->index()->nullable();
            $table->bigInteger('company_id')->unique()->unsigned()->index();

            $table->longtext('company_culture')->nullable();
            $table->longtext('gap')->nullable();
            $table->longtext('motivation')->nullable();
            $table->longtext('message')->nullable();

            $table->integer('education_environment')->nullable();
            $table->integer('openness')->nullable();
            $table->integer('marale')->nullable();
            $table->integer('growup_environment')->nullable();

            $table->string('open_flag');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

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
