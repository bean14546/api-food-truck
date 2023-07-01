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
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Food_Name', 128);
            $table->double('Food_Price', 8, 2);
            $table->text('Food_Description') -> nullable();
            $table->string('Food_Image') -> nullable();
            $table->integer('category_id');
            $table->boolean('is_recommend');
            $table->boolean('is_new');
            $table->boolean('is_active');
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
        Schema::dropIfExists('food');
    }
};
