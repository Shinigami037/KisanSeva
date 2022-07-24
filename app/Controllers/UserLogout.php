<?php

namespace App\Controllers;

class UserLogout extends BaseController
{
    public function logout()
    {
        // session_start();
        // echo session('username');
        // session_unset();
        // echo session('username');
        // session_->stop();
        // session_destroy();
        $session = session();
        $session->destroy();
        // die("session_destroy");
        return redirect('index');
    }
}
