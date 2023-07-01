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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 128);
            // $table->string('User_Last_Name', 128);
            // $table->string('User_Avatar') -> nullable();
            // $table->integer('User_Point') -> default(0);
            // $table->string('email', 64)->unique();
            // $table->timestamp('email_verified_at') -> nullable();
            // $table->string('password');
            // $table->tinyInteger('role') -> default(2);
            // $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
