<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('NIC');
            $table->string('province');
            $table->string('district');
            $table->string('injection_name');
            //$table->date('date'); //admin
            //$table->timeTz('time', $precision = 0); //admin
            //$table->string('location'); //admin
            $table->string('dosenum');
            $table->string('phone', 10);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });

        /* Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('nic');
            $table->foreign('nic')->references('NIC')->on('users');
        });*/
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}