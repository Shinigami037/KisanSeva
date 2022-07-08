<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function login()
    {
        return view('user/pages/' . "login");
    }
}
