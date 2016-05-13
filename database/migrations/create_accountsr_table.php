<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AccountsR', function (Blueprint $table) {
            $table->int('Age');
            $table->string('Balance');
            $table->int('EstUncolPerc');
            $table->int('EstUncolBal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('AccountsR');
    }
}
