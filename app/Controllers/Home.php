<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return view('pages/' . "index");
    }
    public function category()
    {
        // return view('welcome_message');
        return view('pages/' . "category");
    }
    public function login()
    {
        // return view('welcome_message');
        return view('pages/' . "login");
    }
  /* public function view($page = 'home')
    {
        echo "$page";
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }*/
}
