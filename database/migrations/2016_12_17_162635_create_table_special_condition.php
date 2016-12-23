<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSpecialCondition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_condition', function (Blueprint $table) {
            $table->increments('id');
			$table->string('condition')->comment("contoh: everydate - Berarti ditampilin setiap tanggal itu | everyhours - Berarti ditampilin setial jam itu");
			$table->integer('val')->comment("Ini value dari TYPE di field condition");
			$table->timestamp('date_from')->default(date("Y-m-d H:i:s"));
			$table->timestamp('date_to')->default(date("Y-m-d H:i:s",strtotime("+7 days")));
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
        Schema::drop('special_condition');
    }
}
