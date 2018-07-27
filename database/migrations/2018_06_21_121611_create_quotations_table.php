<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unSigned();
            $table->string('mode');
            $table->string('container');
            $table->integer('length');
            $table->integer('width');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('quantity');
            $table->string('commodity');
            $table->longText('message')->nullable();
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
        Schema::drop('quotations');
    }
}
