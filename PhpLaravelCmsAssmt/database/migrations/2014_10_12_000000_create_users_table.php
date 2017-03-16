<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
