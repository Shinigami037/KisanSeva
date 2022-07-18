<?php

namespace App\Controllers;

class AdminLogout extends BaseController
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return view('admin/login/' . "login");
    }
}