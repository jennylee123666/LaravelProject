<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retals', function (Blueprint $table) {
            $table->increments('order_id');
            $table->timestamps('time');
            $table->integer('computer_id');
            $table->integer('rental_user_id');
            $table->float('base_price');
            $table->float('duration');
            $table->float('discount');
            $table->float('insurance');
            $table->float('total_price');
            $table->float('deposit');
            $table->string('damage_status');
            $table->string('damage_amount');
            $table->bool('deposit_returned');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retals');
    }
};
