<?php

use CodeIgniter\Controller;

defined('BASEPATH') OR  exit('No direct script access allowed');

class work extends Controller
{
    public function index()
    {
        return view('index');
    }
}
