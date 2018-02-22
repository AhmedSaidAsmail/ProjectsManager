<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contractor_id')->unsigned();
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->string('address');
            $table->string('phone');
            $table->string('phone2')->nullable();
            $table->string('emergency_phone');
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
        Schema::dropIfExists('contractor_informations');
    }
}
