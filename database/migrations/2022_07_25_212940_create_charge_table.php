<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_id')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('token')->nullable();
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
        Schema::dropIfExists('charge');
    }
}
