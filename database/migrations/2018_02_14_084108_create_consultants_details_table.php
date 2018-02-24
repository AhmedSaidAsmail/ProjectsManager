<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultantsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consultant_id')->unsigned();
            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade');
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('consultant_details');
    }
}
