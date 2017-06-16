<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementdepositTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statementdeposit', function(Blueprint $table) {
          $table->increments('id');
		    $table->string('username');
		    $table->string('balance');
		    $table->string('bankdeposit');
		    $table->string('accountnumberdeposit');
		    $table->string('accontnamedeposit');
		    $table->datetime('datetime');
		    $table->string('channeldeposit');
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
