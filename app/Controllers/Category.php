<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Category extends BaseController
{
    public function category()
    {
        $product = new ProductModel();
        $data2 = $product->paginate(6);
        // $data = $product->findAll();
        return view('user/category/category', ['category' => $data2 ,'pager' => $product->pager]);
    }
}