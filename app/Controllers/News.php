<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class News extends BaseController
{
    public function index()
    {
        return view("user/news/news");
        // $userlist = new UserModel;
        // $data = $userlist->findAll();
        // return view("user/home/index",['name' => $data]);
    }
}
