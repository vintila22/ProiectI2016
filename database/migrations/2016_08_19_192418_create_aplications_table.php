<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('aplications', function (Blueprint $table) {

                $table->increments('aplication_id');
                $table->integer('user_id')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->integer('source')->nullable();
                $table->float('DAE')->nullable();
                $table->float('interest')->nullable();
                $table->timestamp('processed_on')->nullable();
                $table->string('status',45)->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->double('amount_requested')->nullable();
                $table->double('amount_granted')->nullable();
                $table->integer('financial_product')->nullable();
                $table->integer('days')->nullable();
                $table->date('date_start')->nullable();
                $table->date('date_end')->nullable();
                $table->primary('outside_application_id');




                 $table->foreign('user_id');
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
        Schema::drop('aplications');
    }
}
