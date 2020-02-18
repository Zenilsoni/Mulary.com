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
            $table->bigInteger('registration_id');
            $table->date('birthdate');
            $table->bigInteger('address_id');
            $table->text('connet_type');
            $table->text('password');
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
        Schema::dropIfExists('mulary_users');
    }
}
