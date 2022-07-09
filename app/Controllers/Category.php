<?php

namespace App\Controllers;

class Category extends BaseController
{
    public function category()
    {
        return view('user/category/' . "category");
    }
}