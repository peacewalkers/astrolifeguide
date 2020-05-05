<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVastusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vastus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderID');
            $table->string('productamount')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('dob');
            $table->string('tob');
            $table->string('pob');
            $table->string('cob');
            $table->string('filenames')->nullable();
            $table->float('amount');
            $table->string('razorpayOrderId')->nullable();
            $table->string('comments')->nullable();
            $table->string('reftype')->nullable();
            $table->string('refdetails')->nullable();
            $table->string('analysis')->nullable();

            $table->string('status')->nullable();
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
        Schema::dropIfExists('vastus');
    }
}
