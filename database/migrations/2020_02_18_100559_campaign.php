<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Campaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('campaign_id');
            $table->integer('enterprise_id');
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
        Schema::dropIfExists('campaigns');
    }
}
