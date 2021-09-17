<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataLogs', function (Blueprint $table) {
            $table->id();
            $table->integer('Borrow_User_ID')->nullable();
            $table->integer('Book_ID')->nullable();
            $table->integer('Admin_User_ID')->nullable();
            $table->date('Borrow_date')->nullable();
            $table->date('Due_date')->nullable();
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
        Schema::dropIfExists('DataLogs');
    }
}
