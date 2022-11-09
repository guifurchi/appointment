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
            $table->unsignedBigInteger("user_id");
            $table->string("name", 100);
            $table->string("presential")->nullable();
            $table->string("video")->nullable();
            $table->string("video_provider")->nullable();
            $table->string("is_hybrid")->nullable();
            $table->string("att_local")->nullable();
            $table->string("b_confirmar")->nullable();
            $table->string("pass_agenda")->nullable();
            $table->string("cancel_minimum_time_aux")->nullable();
            $table->string("request_email")->nullable();
            $table->string("request_telefone")->nullable();
            $table->string("request_data_nascimento")->nullable();
            $table->string("request_genero")->nullable();
            $table->string("request_profession")->nullable();
            $table->string("request_place_of_birth")->nullable();
            $table->string("request_nacionalidade")->nullable();
            $table->string("request_doc_id")->nullable();
            $table->string("request_address")->nullable();
            $table->string("b_solicita_add")->nullable();
            $table->string("desc", 1500)->nullable();
            $table->string("b_notify_email")->nullable();
            $table->string("email_cc", 100)->nullable();
            $table->string("national_holiday")->nullable();
            $table->string("state_holiday")->nullable();
            $table->string("time_between")->nullable();
            $table->string("time_before")->nullable();
            $table->string("time_after")->nullable();
            $table->string("time_after_hour")->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');

        });
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
