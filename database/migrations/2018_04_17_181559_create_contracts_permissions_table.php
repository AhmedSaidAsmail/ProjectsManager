<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permission_id')->unsigned();
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->string('name');
            $table->integer('information')->default(0);
            $table->integer('schedule')->default(0);
            $table->integer('submittals')->default(0);
            $table->integer('quantities')->default(0);
            $table->integer('requests')->default(0);
            $table->integer('changing_orders')->default(0);
            $table->integer('correspondence')->default(0);
            $table->integer('tenders_drawings')->default(0);
            $table->integer('shop_drawings')->default(0);
            $table->integer('cordnation_drawings')->default(0);
            $table->integer('tools')->default(0);
            $table->integer('tests')->default(0);
            $table->integer('reports')->default(0);
            $table->integer('video')->default(0);

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
        Schema::dropIfExists('contracts_permissions');
    }
}
