<?php

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
            $table->integer('posted_by')->unsigned();
            $table->string('company');
            $table->string('title');
            $table->text('description');
            $table->integer('salary')->unsigned()-nullable();
            $table->integer('type_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('posted_by')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}