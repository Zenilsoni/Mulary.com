<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('registration_id');
            $table->text('email');
            $table->text('firstname');
            $table->text('lastname');
            $table->text('contact');
            $table->bigInteger('school_id');
            $table->text('occupations');
            $table->boolean('terms');
            $table->text('status');
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
        Schema::dropIfExists('registrations');
    }
}
