<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('jobcategory_id')->unsigned();
            $table->integer('jobtypecategory_id')->unsigned();
            $table->string('job_title');
            $table->string('slug');
            $table->text('description');
            $table->integer('view_count')->default(0);
            $table->string('salary');
            $table->string('location');
            $table->string('contact_user');
            $table->string('contact_email');
            $table->string('company');
            $table->string('phone');
            $table->timestamps();


            // Foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
