<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('questions', function (Blueprint $table) { // schema for table 'users'
        //     $table->BigIncrements('id');                         // add column 'id' that will be AI PK
        //     $table->unsignedBigInteger('user_id')->unique();                           // create a string column 
        //     $table->string('title')->nullable()->change();                       // create a string column 
        //     $table->string('text')->nullable()->change();                       // create a string column
        //     $table->timestamps();                             // add common columns 'created_at' and 'updated_at'
        // });
        Schema::table('questions', function (Bluevendorprint $table) {
            $table->string('title')->nullable()->change(); 
            $table->string('text')->nullable()->change(); // makes the column nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('questions');
        Schema::table('questions', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change(); // makes the column NOT nullable again
            $table->string('text')->nullable(false)->change();
        });
    }
}
