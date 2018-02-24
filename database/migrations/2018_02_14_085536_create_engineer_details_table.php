<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('engineer_id')->unsigned();
            $table->foreign('engineer_id')->references('id')->on('engineers')->onDelete('cascade');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('engineer_details');
    }
}
