<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('sms', function (Blueprint $table) {

            $table->increments('sms_id');
            $table->text('text')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->integer('confirmation_received')->nullable();
            $table->integer('application_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamps();
            $table->rememberToken();


              $table->foreign('application_id');
                        ->references('aplication_id');
                        ->on('aplications');
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
        Schema::drop('sms'); 
    }
}
