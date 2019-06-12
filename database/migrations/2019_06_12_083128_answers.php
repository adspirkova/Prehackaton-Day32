<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Answers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('answers', function (Blueprint $table) { // schema for table 'users'
        //     $table->BigIncrements('id');                         // add column 'id' that will be AI PK
        //     $table->unsignedBigInteger('user_id');                           // create a string column 
        //     $table->unsignedBigInteger('question_id'); 
        //     $table->text('text')->nullable()->change();                       // create a string column
        //     $table->timestamps();                             // add common columns 'created_at' and 'updated_at'
        // });
        Schema::table('answers', function (Blueprint $table) {
            $table->text('text')->nullable()->change(); // makes the column nullable
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function (Blueprint $table) {
            $table->string('text')->nullable(false)->change(); // makes the column NOT nullable again
        })
    }
}
