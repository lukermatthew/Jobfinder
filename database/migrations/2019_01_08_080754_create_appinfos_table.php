<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('jobtypecategory_id')->unsigned();
            $table->string('job_title')->nullable();
            $table->string('phone')->nullable();
            $table->text('skill')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('resume')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreign('jobtypecategory_id')
            ->references('id')->on('jobtypecategories')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appinfos');
    }
}


