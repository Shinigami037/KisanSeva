<?php

namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    // public function single_product($id = null)
    // {
    //     $product = new ProductModel();
    //     $data = $product->find($id);
    //     return view('user/product/single-product',['items' => $data]);
    // }
    public function index()
    {
        return view('user/product/shop');
    }
}
