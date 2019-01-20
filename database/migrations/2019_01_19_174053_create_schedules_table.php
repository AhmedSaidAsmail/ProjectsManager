<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('activity_id');
            $table->string('related_to')->nullable();
//            $table->foreign('related_to')->references('activity_id')->on('schedules')->onDelete('cascade');
            $table->string('sort')->nullable();
            $table->string('activity_name');
            $table->integer('default_duration');
            $table->date('planed_starting_date')->nullable();
            $table->date('actual_starting_date')->nullable();
            $table->date('actual_ending_date')->nullable();
            $table->integer('status')->nullable();
            $table->string('status_reason')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
