<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return view('user/login/' . "login");
    }
}