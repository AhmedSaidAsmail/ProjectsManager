<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contractor_id')->unsigned();
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
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
        Schema::dropIfExists('contractor_documents');
    }
}
