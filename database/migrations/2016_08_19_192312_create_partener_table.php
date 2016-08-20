<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('partener', function (Blueprint $table) {

                $table->increments('PartnerID');
                $table->integer('Sursa');
                $table->timestamp('ChangedON');
                $table->timestamp('ProcessDate')->nullable();
                $table->string('Nume',100);
                $table->string('Prenume',100);
                $table->string('TipPartener',50);
                $table->string('Email',50);
                $table->string('CNP',50);
                $table->string('Mobil',50);
                $table->integer('TipId');
                $table->string('IDNo',50);
                $table->string('IDSerie',50);
                $table->string('IDeliberat',50);
                $table->date('DataExpirare');
                $table->string('DomiciliuStr',100);
                $table->string('DomiciliuNrStr',20);
                $table->string('DomiciliuBloc',20);
                $table->string('DomiciliuSc',20);
                $table->string('DomiciliuAp',20)->nullable();
                $table->string('DomiciliuEt',20)->nullable();
                $table->string('DomiciliuOras',50);
                $table->string('DomiciliuJudet',50);
                $table->string('CorespStr',50);
                $table->string('CorespNrStr',20);
                $table->string('CorespBl',20);
                $table->string('CorespSc',20);
                $table->string('CorespAp',20);
                $table->string('CorespEt',20);
                $table->string('CorespOras',50);
                $table->string('CorespJudet',50);
                $table->string('MaritalStatus',20);
                $table->string('DatePrivindSituatiaLocativa',40)->nullable();
                $table->string('AlteProprietati',20)->nullable();
                $table->integer('Dependents');
                $table->string('DenumireAngajator',40);
                $table->string('SectorEmployer',50);
                $table->integer('VechimeTotalaInMunca)')->nullable();
                $table->integer('VechimeLaActualulLocDeMunca')->nullable();
                $table->string('Educatie',45)->nullable();
                $table->string('TipVenit',45)->nullable();
                $table->string('SursaVenit',45)->nullable();
                $table->integer('DataIncasariivenitului')->nullable();
                $table->integer('TotalMonthlyIncome',);
                $table->integer('DatoriiLunare')->nullable();
                $table->integer('RateLunareLaAlteImprumuturi')->nullable;
                $table->string('TotalMonthlyExpenses',45);
                $table->integer('IncarcatCI');
                $table->string('TipDisbursare',20)->nullable();
                $table->string('ContIBAN',45)->nullable();
                $table->integer('VechimeCont')->nullable();
               






         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
