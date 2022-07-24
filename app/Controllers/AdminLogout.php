<?php

namespace App\Controllers;

class AdminLogout extends BaseController
{
    public function logout()
    {
        // session_start();
        // session_unset();
        // session_destroy();
        $session = session();
        $session->destroy();
        return redirect('adminlogin');
        // return view('admin/login/' . "login");
    }
}