<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_cv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id')->unsigned();
            $table->integer('job_id')->unsigned();
            
            $table->timestamps();
            
            $table->foreign('cv_id')->references('id')->on('cvs');
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job_cv');
    }
}
