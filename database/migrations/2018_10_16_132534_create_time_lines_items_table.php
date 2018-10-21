<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeLinesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_lines_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time_line_id')->unsigned();
            $table->foreign('time_line_id')->references('id')->on('time_lines')->onDelete('cascade');
            $table->string('activity_id');
            $table->string('activity_name');
            $table->integer('original')->unsigned();
            $table->date('starting_date');
            $table->date('ending_date');
            $table->timestamps();
        });
        DB::statement(' ALTER TABLE time_lines ADD CONSTRAINT check_end_date CHECK (ending_date > starting_date)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_lines_items');
    }
}
