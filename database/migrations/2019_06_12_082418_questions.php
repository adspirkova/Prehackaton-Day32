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
        Schema::create('questions', function (Blueprint $table) { // schema for table 'users'
            $table->BigIncrements('id');                         // add column 'id' that will be AI PK
            $table->unsignedBigInteger('user_id')->unique();                           // create a string column 
            $table->string('title')->nullable()->change();                       // create a string column 
            $table->string('text')->nullable()->change();                       // create a string column
            $table->timestamps();                             // add common columns 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
