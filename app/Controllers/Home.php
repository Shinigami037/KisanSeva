<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        $userlist = new \App\Models\UserModel;
        $data = $userlist->findAll();
        return view("pages/index",['name' => $data]);
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
    public function single_blog()
    {
        // return view('welcome_message');
        return view('pages/' . "single_blog");
    }
    public function single_product()
    {
        // return view('welcome_message');
        return view('pages/' . "single_product");
    }public function elements()
    {
        // return view('welcome_message');
        return view('pages/' . "elements");
    }public function confirmation()
    {
        // return view('welcome_message');
        return view('pages/' . "confirmation");
    }
    public function contact()
    {
        // return view('welcome_message');
        return view('pages/' . "contact");
    }public function checkout()
    {
        // return view('welcome_message');
        return view('pages/' . "checkout");
    }
    public function cart()
    {
        // return view('welcome_message');
        return view('pages/' . "cart");
    }
    public function blog()
    {
        // return view('welcome_message');
        return view('pages/' . "blog");
    }public function tracking()
    {
        // return view('welcome_message');
        return view('pages/' . "tracking");
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
