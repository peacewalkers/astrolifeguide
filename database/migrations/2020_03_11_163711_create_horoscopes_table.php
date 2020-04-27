<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoroscopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horoscopes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderID');
            $table->string('productamount')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('reptype');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->string('dob');
            $table->string('tob');
            $table->string('pob');
            $table->string('cob');
            $table->string('comments')->nullable();
            $table->string('reftype')->nullable();
            $table->string('refdetails')->nullable();
            $table->string('horoscope')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horoscopes');
    }
}
