<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserAddressDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //        
        Schema::create('user_address_details', function (Blueprint $table) {
            $table->bigIncrements('address_id');
            $table->bigInteger('user_id');
            $table->integer('street_number');
            $table->text('street_name');
            $table->integer('unit_number')->nullable();
            $table->text('city');
            $table->text('province');
            $table->text('postal_code');
            $table->text('country');
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
        Schema::drop('user_address_details');
    }
}
