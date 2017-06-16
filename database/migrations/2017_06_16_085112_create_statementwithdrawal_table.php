<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementwithdrawalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statementwithdraw', function(Blueprint $table) {
      $table->increments('id');
       $table->string('username');
       $table->string('balance');
       $table->string('bankwithdrawal');
       $table->string('accountnumberwithdrawal');
       $table->string('accountnamewithdrawal');
       $table->datetime('datetime');
       $table->string('channelwithdraw');
       $table->string('opinion');


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
