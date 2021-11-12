<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    public static function index()
    {
        $data = DB::select('select * from categories');
        return $data;
        
    }
}
