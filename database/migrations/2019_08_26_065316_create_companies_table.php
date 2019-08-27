<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('mission')->nullable();
            $table->string('desired_person')->nullable();
            $table->string('name')->nullable();
            $table->longtext('desc')->nullable();
            $table->string('address')->nullable();

            $table->integer('member_count')->nullable();
            
            $table->string('established_at')->nullable();
            $table->string('founder')->nullable();
            $table->string('hp_url')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('tw_url')->nullable();
            $table->string('pickup_flag')->nullable();

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
        Schema::dropIfExists('companies');
    }
}
