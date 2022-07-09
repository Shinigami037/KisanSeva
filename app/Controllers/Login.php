<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends BaseController
{
    public function login()
    {
        return view('user/login/' . "login");
    }
    public function userLogin()
    {
        $newvar = var_dump($this->request->getVar("username"));
        // echo "Hello $newvar";
        var_dump(md5($this->request->getVar("password")));
        // var_dump($this->request->getPost());
    }
}
