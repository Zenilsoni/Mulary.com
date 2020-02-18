<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payment_details', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->bigInteger('user_id');
            $table->text('username');
            $table->decimal('total_earnings',60,3);
            $table->decimal('redemption',60,3);
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
        Schema::dropIfExists('campapayment_details');
    }
}
