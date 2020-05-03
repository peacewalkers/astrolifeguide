<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchmakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchmakers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('orderID');
            $table->string('productamount')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('dob');
            $table->string('tob');
            $table->string('pob');
            $table->string('cob')->nullable();
            $table->string('comments')->nullable();
            $table->string('status')->nullable();
            $table->string('reftype')->nullable();
            $table->string('refdetails')->nullable();
            $table->string('matchmaker')->nullable();
            $table->string('paymentstatus')->nullable();

            $table->string('nameone')->nullable();
            $table->string('dobone')->nullable();
            $table->string('tobone')->nullable();
            $table->string('pobone')->nullable();
            $table->string('cobone')->nullable();
            $table->string('comone')->nullable();

            $table->string('nametwo')->nullable();
            $table->string('dobtwo')->nullable();
            $table->string('tobtwo')->nullable();
            $table->string('cobtwo')->nullable();
            $table->string('pobtwo')->nullable();
            $table->string('comtwo')->nullable();

            $table->string('namethree')->nullable();
            $table->string('dobthree')->nullable();
            $table->string('tobthree')->nullable();
            $table->string('pobthree')->nullable();
            $table->string('cobthree')->nullable();
            $table->string('comthree')->nullable();
            $table->float('amount');
            $table->string('razorpayOrderId')->nullable();
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
        Schema::dropIfExists('matchmakers');
    }
}
