<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnterpriseDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_details', function (Blueprint $table) {
            $table->bigIncrements('enterprise_id');
            $table->text('company_name');
            $table->text('enterprise_first_name');
            $table->text('enterprise_last_name');
            $table->text('enterprise_email');
            $table->text('enterprise_title');
            $table->text('enterprise_phone');
            $table->text('enterprise_website');
            $table->text('enterprise_password');
            $table->text('enterprise_instagram');
            $table->text('enterprise_facebook');
            $table->text('enterprise_employees_range');
            $table->text('enterprise_industry');
            $table->decimal('enterprise_revenue',15,3);
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
        Schema::dropIfExists('enterprise_details');
    }
}
