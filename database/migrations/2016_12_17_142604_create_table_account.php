<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->char('username',25);
			$table->char('password',100);
			$table->char('fullname',50);
			$table->char('email',100)->unique();
			$table->smallInteger('role');
			$table->ipAddress('last_ip')->nullable();
			$table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account');
    }
}
