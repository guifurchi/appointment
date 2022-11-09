<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableOpeningHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_opening_hours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('appointment_id');

            $table->string('initial_time_monday')->nullable();
            $table->string('end_time_monday')->nullable();
            $table->string('amount_monday')->nullable();

            $table->string('initial_time_tuesday')->nullable();
            $table->string('end_time_tuesday')->nullable();
            $table->string('amount_tuesday')->nullable();

            $table->string('initial_time_wednesday')->nullable();
            $table->string('end_time_wednesday')->nullable();
            $table->string('amount_wednesday')->nullable();

            $table->string('initial_time_thursday')->nullable();
            $table->string('end_time_thursday')->nullable();
            $table->string('amount_thursday')->nullable();

            $table->string('initial_time_friday')->nullable();
            $table->string('end_time_friday')->nullable();
            $table->string('amount_friday')->nullable();

            $table->string('initial_time_saturday')->nullable();
            $table->string('end_time_saturday')->nullable();
            $table->string('amount_saturday')->nullable();

            $table->string('initial_time_sunday')->nullable();
            $table->string('end_time_sunday')->nullable();
            $table->string('amount_sunday')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('appointment_id')->references('id')->on('appointments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_opening_hours');
    }
}
