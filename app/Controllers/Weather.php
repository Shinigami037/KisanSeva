<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Weather extends BaseController
{
    public function index()
    {
        return view("user/weather/weather");
        // $userlist = new UserModel;
        // $data = $userlist->findAll();
        // return view("user/home/index",['name' => $data]);
    }
}
