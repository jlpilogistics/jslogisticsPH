<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('company');
            $table->string('email');
            $table->string('phone');
            $table->longText('address');
            $table->string('city');
            $table->string('country');
            $table->integer('zip');
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
        Schema::drop('consignees');
    }
}
