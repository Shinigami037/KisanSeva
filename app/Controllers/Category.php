<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Category extends BaseController
{
    public function category()
    {
        $product = new ProductModel();
        $data = $product->findAll();
        return view('user/category/category', ['category' => $data]);
    }
}