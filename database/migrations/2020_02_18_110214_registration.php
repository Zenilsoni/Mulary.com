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
            $table->text('email')->nullable(false);
            $table->text('firstname')->nullable(false);
            $table->text('lastname')->nullable(false);
            $table->text('contact')->nullable(false);
            $table->bigInteger('school_id')->nullable(false);
            $table->text('previous_college')->nullable(true);
            $table->text('occupations')->nullable();
            $table->boolean('terms')->nullable(false);
            $table->text('status')->nullable(true);
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
