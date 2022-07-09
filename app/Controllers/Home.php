<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        $userlist = new UserModel;
        $data = $userlist->findAll();
        return view("user/home/index",['name' => $data]);
    }
}
