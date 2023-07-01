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
    // public function up()
    // {
    //     Schema::create('orders', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->integer('order_status_id');
    //         $table->integer('user_id');
    //         $table->tinyInteger('isTakeaway');
    //         $table->timestamps();
            // $table->text('Chef_Note'); // Note สำหรับ เชฟ กรณี order status fail
    //         // $table->integer('coupon_id') -> nullable();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
