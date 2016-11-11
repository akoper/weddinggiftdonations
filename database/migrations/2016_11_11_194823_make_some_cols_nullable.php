<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeSomeColsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('hashtag')->nullable()->change();
            $table->string('oneFName')->nullable()->change();
            $table->string('oneLName')->nullable()->change();
            $table->string('twoLName')->nullable()->change();
            $table->string('twoFName')->nullable()->change();
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
