<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineers', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('type_id')->unsigned();
//            $table->foreign('type_id')->references('id')->on('engineer_types')->onDelete('cascade');
            $table->integer('contractor_id')->unsigned()->nullable();
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->integer('consultant_id')->unsigned()->nullable();
            $table->foreign('consultant_id')->references('id')->on('consultants')->onDelete('cascade');
            $table->integer('owner_id')->unsigned()->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->text('password')->nullable();
            $table->string('img')->nullable();
            $table->boolean('active')->default(0);
            $table->integer('permission_id')->unsigned()->nullable();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('engineers');
    }
}
