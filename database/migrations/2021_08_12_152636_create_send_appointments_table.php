<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date'); //admin
            $table->time('time'); //admin
            $table->string('location');
            $table->string('patientNIC');
            $table->rememberToken();
            /* $table->unsignedBigInteger('AppointmentID');
            $table->foreign('AppointmentID')->references('id')->on('appointments');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_appointments');
    }
}