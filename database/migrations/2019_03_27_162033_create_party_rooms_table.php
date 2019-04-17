<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->string('logo')->nullable();
            $table->string('images')->nullable();
            $table->string('video')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->integer('number_room')->nullable();
            $table->integer('total_capacity')->nullable();
            $table->integer('capacity_men_room')->nullable();
            $table->integer('capacity_women_room')->nullable();
            $table->string('city');
            $table->string('kitchen')->nullable();
            $table->string('theatre')->nullable();
            $table->string('restaurent')->nullable();
            $table->string('parcking')->nullable();
            $table->string('location')->nullable();
            $table->enum('status', ['approved', 'disapproved', 'banned'])->default('disapproved');
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
        Schema::dropIfExists('party_rooms');
    }
}
