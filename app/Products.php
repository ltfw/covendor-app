<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    public static function index()
    {
        $data = DB::select('select * from products');
        return $data;
    }

    public static function getDetailProduct($id)
    {
        $data = DB::select('select * from products where id = ?',[$id]);
        return $data;
    }

    public static function getProductImage($id)
    {
        $data = DB::select('select * from product_images where id = ?',[$id]);
        return $data;
    }


}
