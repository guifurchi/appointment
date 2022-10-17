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
            'name' => 'Guilherme',
            'email' => 'guifurchi65@gmail.com',
            'telefone' => '92981882726',
            'endereco' => '',
            'nivel' => 'admin', 
            'password' => '827ccb0eea8a706c4c34a16891f84e7b'//md5 encode for '12345'
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
