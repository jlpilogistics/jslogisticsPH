<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('zip');
            $table->string('phone');
            $table->string('token');
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
        Schema::drop('senders');
    }
}
