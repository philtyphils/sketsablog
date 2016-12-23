<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuChild extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_child', function (Blueprint $table) {
            $table->increments('id')->unique();
			$table->integer('parent_id');
			$table->string('name');
			$table->string('meta_tag');
			$table->string('meta_title');
			$table->string('meta_description');
			$table->boolean('active')->default(1);
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
        Schema::drop('menu_child');
    }
}
