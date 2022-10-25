<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Utilities extends Model
{
    use HasFactory;

    public function nacionality(){

        $nacionalities = DB::table('nacionality')
                    ->select('id','description')
                    ->get();

        return $nacionalities;
    }
}
