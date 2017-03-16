<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->text('all_pages');
            $table->text('html_content');
            $table->integer('page_id')->unsigned();
            $table->integer('contentarea_id')->unsigned();
            $table->integer('created_by_id')->unsigned();
            $table->integer('modified_by_id')->unsigned();
            $table->timestamps();
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('modified_by_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
