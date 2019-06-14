<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SettingNullableToTitleAndText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::table('questions', function (Bluevendorprint $table) {
        //    $table->string('title')->nullable()->change(); 
        //    $table->string('text')->nullable()->change(); // makes the column nullable
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change(); // makes the column NOT nullable again
            $table->string('text')->nullable(false)->change();
        });
    }
}
