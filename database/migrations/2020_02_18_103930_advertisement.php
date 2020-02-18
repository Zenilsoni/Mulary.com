<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Advertisement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('advertisements', function (Blueprint $table) {
            $table->bigIncrements('advertise_id');
            $table->integer('campaign_id');
            $table->text('advertise_name');
            $table->binary('image');
            $table->text('description');
            $table->decimal('budget_amount',15,3);
            $table->date('post_start_date');
            $table->date('post_end_date');
            $table->integer('total_sharing');
            $table->integer('available_sharing');
            $table->integer('min_age');
            $table->text('target_student_status');
            $table->text('target_occupation');
            $table->text('target_interest');
            $table->text('target_gender');
            $table->text('target_location');
            $table->integer('minimum_post_duration');            
            $table->bigInteger('target_hits');
            $table->bigInteger('total_target');
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
        Schema::dropIfExists('advertisements');
    }
}
