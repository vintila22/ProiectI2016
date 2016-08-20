<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('jobs', function (Blueprint $table) {

                $table->increments('job_id');
                $table->integer('total_experience')->nullable();
                $table->integer('current_employer_experience')->nullable();
                $table->string('employer_name',45)->nullable();
                $table->string('total_experience_type')->nullable();
                $table->string('current_experience_type')->nullable();
                $table->integer('income')->nullable();
                $table->date('salary_date')->nullable();
                $table->string('income_type',45)->nullable();
                $table->timestamps();
                $table->rememberToken();


         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
