<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWReportAdditionalTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('w_report_additional', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_id')->unsigned();
            $table->foreign('report_id')->references('id')->on('project_weekly_reports')->onDelete('cascade');
            $table->text('done_working')->nullable();
            $table->text('report_status')->nullable();
            $table->text('working_rate')->nullable();
            $table->text('completion_Schedule')->nullable();
            $table->text('working_next_month')->nullable();
            $table->text('consultant_note')->nullable();
            $table->text('contractor_required')->nullable();
            $table->text('owner_required')->nullable();
            $table->text('consultant_recommendations')->nullable();
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
        Schema::dropIfExists('w_report_additional');
    }
}
