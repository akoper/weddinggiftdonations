<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NullFieldsDonationNonprofits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donations', function ($table) {
            $table->string('amount')->nullable()->change();
            $table->string('number')->nullable()->change();
        });

        Schema::table('nonprofits', function ($table) {
            $table->string('mission')->nullable()->change();
            $table->string('WebSite')->nullable()->change();
            $table->string('payment')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
