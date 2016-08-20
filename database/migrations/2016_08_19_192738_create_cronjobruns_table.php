<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronjobrunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cronjobruns', function (Blueprint $table) {


            $table->increments('cronjobruns_id');
            $table->integer('history_id')->nullable();
            $table->integer('executed_with_error')->nullable();
            $table->string('cronjob_name',50)->nullable();
            $table->timestamp('ran_at')->nullable();
            $table->time('duration')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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
        Schema::drop('cronjobruns')
    }
}
