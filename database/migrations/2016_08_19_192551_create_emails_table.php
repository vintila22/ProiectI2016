<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {

                $table->increments('email_id');
                $table->string('subject',45)->nullable();
                $table->text('body')->nullable();
                $table->integer('status')->nullable();
                $table->integer('receipient_id')->nullable();
                $table->integer('type')->nullable();
                $table->timestamps();
                $table->rememberToken();

                  $table->foreign('recipient_id');
                        ->references('user_id');
                        ->on('users');
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
        Schema::drop('emails');
    }
}
