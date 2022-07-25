<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function single_product()
    {
        return view('user/product/' . "single_product");
    }

}