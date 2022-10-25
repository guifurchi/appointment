<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('u_name', 50);
            $table->char('u_email', 50)->unique();
            $table->char('u_password', 50);
            $table->string('u_level')->default('user');
            $table->string('u_phone')->nullable();
            $table->string('u_cpf')->nullable();
            $table->string('u_gender')->nullable();
            $table->string('u_marital_status')->nullable();
            $table->char('u_type_ident', 50)->nullable();
            $table->string('u_type_ident_num')->nullable();
            $table->string('u_nacionality')->nullable();
            $table->date('u_birthday')->nullable();
            $table->char('u_occupation', 100)->nullable();
            $table->char('u_address', 150)->nullable();
            $table->char('u_agreementEulaPrivacity', 1)->nullable();
            $table->string('u_planType')->nullable();
            $table->string('u_planStatus')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
