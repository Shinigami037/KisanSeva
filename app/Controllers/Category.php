<?php

namespace App\Controllers;
use App\Models\ProductModel;

class Category extends BaseController
{
    public function category()
    {
        $product = new ProductModel();
        $data2 = [
            'category' => $product->where('status' , 1)->paginate(6),
            'pager' => $product->pager
        ];
        $data = $product->findAll();
        return view('user/category/category', $data2);
    }
}