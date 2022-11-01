<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursemodels', function (Blueprint $table) {
            $table->bigIncrements('Course_Code');
            $table->string('Course_Name');
            $table->string('Teacher_Name');
            $table->string('Credit_Hours');
            $table->string('Teaching_Day');
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
        Schema::dropIfExists('coursemodels');
    }
};
