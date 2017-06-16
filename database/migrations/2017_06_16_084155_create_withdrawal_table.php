<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('withdrawal', function(Blueprint $table) {
      $table->increments('id');
      $table->string('username');//ชื่อลูกค้า
      $table->string('balance');//ยอดเงิน
      $table->string('bankwithdrawal');//ถอนเข้าธนาคาร
      $table->string('accountnumberwithdrawal');//ถอนเข้าเลขที่บัญชี
      $table->string('accountnamewithdrawal');//ถอนเข้าชื่อบัญชี
      $table->datetime('datetime');//วันเวลาที่ฝาก
      $table->string('channelwithdraw');//ช่องทางการถอน
      $table->string('tel');//เบอร์โทร
      $table->string('opinion');//ความคิดเห็น

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
