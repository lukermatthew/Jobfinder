<?php

use Illuminate\Support\Facades\Schema;
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
            $table->integer('role_id');
            $table->integer('jobtypecategory_id')->unsigned();
            $table->string('job_title')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->default('default.png');
            $table->text('about')->nullable();
            $table->string('phone')->nullable();
            $table->text('skill')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('resume')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
