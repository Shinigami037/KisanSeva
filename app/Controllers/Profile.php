<?php

namespace App\Controllers;

use CodeIgniter\Config\View;

class Profile extends BaseController
{
    public function profile()
    {
        return view('user/profile/profile');
    }
}