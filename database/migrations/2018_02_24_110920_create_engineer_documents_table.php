<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineerDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineer_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('engineer_id')->unsigned();
            $table->foreign('engineer_id')->references('id')->on('engineers')->onDelete('cascade');
            $table->string('document_type');
            $table->string('document_file');
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
        Schema::dropIfExists('engineer_documents');
    }
}
