<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicatiiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('aplicatii', function (Blueprint $table) {

                $table->increments('IdAplicatie');
                $table->integer('PartnerID')->nullable();
                $table->integer('Sursa');
                $table->timestamp('ChangedOn');
                $table->timestamp('ProcessDate')->nullable();
                $table->integer('IdProdusFinanciar')->nullable();
                $table->integer('Suma')->nullable();
                $table->float('Dobanda')->nullable();
                $table->float('DAE')->nullable();
                $table->integer('NumarZile')->nullable();
                $table->date('DataScadenta')->nullable();
                $table->date('DataContract')->nullable();
                $table->string('StatusAplicatie',500);
                $table->rememberToken();
                $table->timestamps();



                $table->foreign('PartnerID')
                        ->references('PartnerID');
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
        Schema::drop('aplicatii');
    }
}
