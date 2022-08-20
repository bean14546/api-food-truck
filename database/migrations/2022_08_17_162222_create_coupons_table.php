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
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('Coupon_Id');
            $table->double('Coupon_Discount', 4, 2);
            $table->string('Coupon_Name', 128);
            $table->text('Coupon_Description');
            $table->integer('Coupon_Quantity');
            $table->integer('Coupon_Maximum_Use');
            $table->date('Coupon_Start_Date');
            $table->date('Coupon_End_Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
