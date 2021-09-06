<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userData', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('User_CID',13)->nullable();
            $table->string('User_Title',10)->nullable();
            $table->string('User_Fname',20)->nullable();
            $table->string('User_Lname',20)->nullable();
            $table->string('User_Password',20)->nullable();
            $table->int('User_Status_ID')->nullable();
            $table->int('Dep_User_ID')->nullable();
            $table->string('User_Email',50)->nullable();
            $table->string('User_Type',5)->nullable();

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
        Schema::dropIfExists('userData');
    }
}
