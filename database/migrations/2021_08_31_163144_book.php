<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('Book_BID')->nullable();
            $table->string('Book_Title',50)->nullable();
            $table->string('Book_Author',50)->nullable();
            $table->integer('Book_Tag_id')->nullable();
            $table->string('Book_Detail',500)->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Book');
    }
}
