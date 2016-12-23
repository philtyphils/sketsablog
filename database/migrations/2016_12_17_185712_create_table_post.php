<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('category_id');
			$table->integer('author');
			$table->string('title');
			$table->string('post');
			$table->string('meta_tag');
			$table->longText('meta_description');
			$table->string('meta_title');
			$table->string('seo_link');
			$table->integer('riz_respond')->default(0);
			$table->integer('publish')->default(0);
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
        Schema::drop('post');
    }
}
