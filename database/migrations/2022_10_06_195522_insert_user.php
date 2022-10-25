<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            'u_name' => 'Guilherme',
            'u_email' => 'guifurchi65@gmail.com',
            'u_phone' => '92981882726',
            'u_password' => '827ccb0eea8a706c4c34a16891f84e7b',//md5 encode for '12345'
            'u_level' => 'admin', 
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
