<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function contact()
    {
        return view('user/contact/' . "contact");
    }
}