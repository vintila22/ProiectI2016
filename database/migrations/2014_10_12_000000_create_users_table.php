<?php

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
            $table->increments('user_id');
            $table->string('address')->nullable();
            $table->string('corespondence_address')->nullable();
            $table->string('type',45)->nullable();
            $table->string('mobile',45)->nullable();
            $table->string('first_name',45)->nullable();
            $table->string('last_name',45)->nullable();
            $table->string('CNP',45)->nullable();
            $table->string('ID',50)
            $table->string('ID_emitor',45)->nullable();
            $table->date('ID_start_date')->nullable;
            $table->date('ID_end_date')->nullable();
            $table->integer('job_id')->nullable();
            $table->double('monthly_expenses',20,20)->nullable();
            $table->string('monthly_debt',45)->nullable();
            $table->integer('ID_card_upload')->nullable();
            $table->string('ID_card_location',45)->nullable();
            $table->primary('partener_id');
            $table->integer('role_id');
            $table->string('password',100)->nullable();
            $table->integer('banned')->nullable();
            $table->rememberToken();



            $table->foreign('job_id')
                    ->references('job_id');
                    ->on('jobs');
                    ->onDelete('NO ACTION');
                    ->onUpdate('NO ACTION');


            $table->foreign('role_id')
                    ->references('role_id');
                    ->on('roles');
                    ->onDelete('NO ACTION');
                    ->onUpdate('NO ACTION');


            $table->foreign('partener_id')
                    ->references('partener_id');
                    ->on('partener');
                    ->onDelete('NO ACTION');
                    ->onUpdate('NO ACTION');


        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
