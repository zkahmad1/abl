<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AccountsR', function(Blueprint $table)//
        {
            $table->string('Name');
            $table->string('Location');
            $table->integer('ID');
            $table->integer('Terms');
            $table->integer('PercGrossAR');
            $table->integer('Age30');
            $table->integer('Age60');
            $table->integer('Age90');
            $table->integer('Age120');
            $table->integer('AgeMore120');
            $table->integer('Total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('AccountsR'); //
    }
}
