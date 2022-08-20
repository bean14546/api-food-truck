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
        Schema::create('map_food_toppings_options', function (Blueprint $table) {
            $table->integer('order_id');
            $table->integer('food_id');
            $table->integer('option_id');
            $table->integer('topping_id') -> nullable();
            $table->integer('Amount');
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
        Schema::dropIfExists('map_food_toppings_options');
    }
};