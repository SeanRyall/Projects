<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsstemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('css_templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->boolean('is_active');
            $table->string('css_content');
            $table->integer('created_by_id');
            $table->integer('modified_by_id');
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
        Schema::drop('css_templates');
    }
}
