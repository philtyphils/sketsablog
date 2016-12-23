<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->string('name',12)->default("Uknown");
			$table->string('meta_title',255);
			$table->string('meta_description',255);
			$table->string('meta_tag',255);
			$table->integer('special_condition')->default(0);
			$table->string('category',255);
			$table->longText('link');
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
        Schema::drop('menu');
    }
}
