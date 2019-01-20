<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyCoulmnToWeeklyReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_weekly_reports', function (Blueprint $table) {
            $table->boolean('monthly')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_weekly_reports', function (Blueprint $table) {
            $table->dropColumn('monthly');
        });
    }
}