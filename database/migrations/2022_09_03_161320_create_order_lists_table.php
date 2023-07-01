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
        Schema::create('order_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_id');
            $table->integer('user_id');
            $table->boolean('isTakeaway');
            $table->integer('order_list_status_id');
            $table->integer('Amount');
            $table->double('Price', 8, 2); // ราคารวม food option topping
            $table->string('Note') -> nullable();
            $table->text('Chef_Note') -> nullable();
            $table->integer('time_countdown_id') -> nullable();
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
        Schema::dropIfExists('order_lists');
    }
};
