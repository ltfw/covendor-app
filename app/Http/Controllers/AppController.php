<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getProducts()
    {
        $data = Products::index();
        foreach ($data as $item) {
            $data->image = Products::getProductImage($item->id);
        }
        return $data;
    }

    public function getProductsDetail($id)
    {
        $data = Products::getDetailProduct($id);
        foreach ($data as  $item) {
            $item->images = Products::getProductImage($id);
        }
        return $data;
    }


    public function getCategories()
    {
        $data = Categories::index();
        return $data;
    }

}
