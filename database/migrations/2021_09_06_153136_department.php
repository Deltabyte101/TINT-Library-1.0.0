<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Department extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Departments', function (Blueprint $table) {
            $table->id();
            $table->string('Dep_Code',20)->nullable();
            $table->string('Dep_Name',30)->nullable();
            $table->int('Dep_Manager')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Departments');
    }
}
