<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mulary_users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('password');
            $table->string('birthdate')->nullable(true);
            $table->string('address_unit')->nullable(true);
            $table->string('address_street');
            $table->string('city');
            $table->string('postal_code');
            $table->string('province');
            $table->string('country');
            //foriegn key
            $table->bigInteger('registration_id')->unsigned();
            $table->foreign('registration_id')->references('registration_id')->on('registrations');

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
        Schema::dropIfExists('mulary_users');
    }
}
